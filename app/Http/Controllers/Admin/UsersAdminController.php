<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersAdminController extends Controller
{

    private $user;
    private $request;

    /**
     * @param User $user
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
                'password' => '',
                'gender' => '',
                'role' => '',
            ], $massages);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (view()->exists('admin.usersAdmin')) {
            $users = $this->user->orderByRaw('role asc')->paginate(20);
            return view('admin.usersAdmin', ['users' => $users]);
        }
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addUserAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (view()->exists('admin.addUserAdmin')) {
            if ($this->request->isMethod('post')) {
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('user.create')->withErrors($validator)->withInput();
                }

                $this->user->create
                ([
                    'firstname' => $this->request->input('firstname'),
                    'secondname' => $this->request->input('secondname'),
                    'email' => $this->request->input('email'),
                    'password' => Hash::make($this->request->input('password')),
                    'gender' => $this->request->input('gender'),
                    'role' => $this->request->input('role'),
                    'verified' => $this->request->input('verified'),

                ]);

                return redirect()->route('user.index');
            }
        }
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $old = $this->user->find($id)->toArray();
        $data = [
            'id' => $old['id'],
            'firstname' => $old['firstname'],
            'secondname' => $old['secondname'],
            'email' => $old['email'],
            'password' => $old['password'],
            'gender' => $old['gender'],
            'role' => $old['role'],
            'verified' => $old['verified'],
        ];

        return view('admin.editUserAdmin', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if (view()->exists('admin.editUserAdmin')) {
            if ($this->request->isMethod('put')) {
                $input = $this->request->all();
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('user.edit', $id)->withErrors($validator)->withInput();
                }
                $ver = $this->request->get('verified');
                $this->user->fill($input);
                $this->user->where('id', $id)->update
                ([
                    'firstname' => $input['firstname'],
                    'secondname' => $input['secondname'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    'gender' => $input['gender'],
                    'role' => $input['role'],
                    'verified' => $input['verified'],
                ]);

                return redirect()->route('user.index');
//                return view('admin.itemAdmin', ['item' => $this->item]);
            }
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->user->find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
