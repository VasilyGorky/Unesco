<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageAdminController extends Controller
{
    private $page;
    private $request;

    /**
     * @param Page $page
     * @param Request $request
     */
    public function __construct(Page $page, Request $request)
    {
        $this->page = $page;
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
                'title' => 'required|string|max:100',
                'text' => 'required'
            ], $massages);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (view()->exists('admin.pageAdmin')) {
            $page = $this->page->find($id);
            return view('admin.pageAdmin',['page'=>$page]);
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
        $old = $this->page->find($id)->toArray();
        $data = [
            'id' => $old['id'],
            'title' => $old['title'],
            'text' => $old['text']
        ];
        return view('admin.editPageAdmin', ['data' => $data]);


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
        if (view()->exists('admin.editPageAdmin')) {
            if ($this->request->isMethod('put')) {
                $input = $this->request->all();
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('page.edit', $id)->withErrors($validator)->withInput();
                }

                $this->page->fill($input);
                $this->page->where('id', $id)->update
                ([
                    'title' => $input['title'],
                    'text' => $input['text']
                ]);
                return redirect()->route('pageshow', $id);

//                return view('admin.pageAdmin',['page'=>$this->page]);
            }
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
