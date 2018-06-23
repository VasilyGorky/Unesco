<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{

    private $user;
    private $request;

    /**
     * @param Page $page
     * @param Request $request
     */
    public function __construct(User $user, Request $request)
    {
        $this->user = $user;
        $this->request = $request;

    }

    private function validateFieldsArticle()
    {
        $input = $this->request->all();
        $massages =
            [
                'required' => 'Field :attribute is required',
                'max' => 'The maximum number of characters exceeded in the :attribute field'
            ];

        return Validator::make($input,
            [
                'firstname' => 'required|string|max:15',
                'secondname' => 'required|string|max:15',
                'email' => 'required|email',
                'password' => 'required|password'
            ], $massages);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (view()->exists('site.profile')) {
            $user = $this->user->find($id);
            return view('site.profile',['user'=>$user]);
        }
        abort(404);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $old = $this->user->find($id)->toArray();
        $data = [
            'id' => $old['id'],
            'firstname' => $old['firstname'],
            'secondname' => $old['secondname'],
            'email' => $old['email']
        ];

        if(Auth::user()->id==$old['id']){
        return view('site.editProfile', ['data' => $data]);
        }
        else abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        if (view()->exists('site.editProfile')) {
            if ($this->request->isMethod('put')) {
                $input = $this->request->all();
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('profile.edit', $id)->withErrors($validator)->withInput();
                }

                $this->user->fill($input);
                $this->user->where('id', $id)->update
                ([
                    'firstname' => $input['firstname'],
                    'secondname' => $input['secondname'],
                    'email' => $input['email']
                ]);

                return redirect()->route('profile.show', $id);
            }
        }
        abort(404);
    }

    public function updatePas($id)
    {
            if ($this->request->isMethod('put')) {
                $input = $this->request->all();


                $this->user->fill($input);
                $this->user->where('id', $id)->update
                ([
                    'password' => Hash::make($input['password']),
                ]);

                return redirect()->route('profile.show', $id);
            }
    }

    public function destroy($id)
    {
        $user = $this->user->find($id);
        foreach ($user->comment as $comment)
        {
            $comment->delete();
        }

        $user->delete();
        return redirect()->route('register');
    }

}
