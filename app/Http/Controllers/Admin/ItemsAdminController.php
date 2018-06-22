<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ItemsAdminController extends Controller
{
    private $item;
    private $request;

    /**
     * ItemsController constructor.
     * @param Item $item
     * @param Request $request
     */
    public function __construct(Item $item, Request $request)
    {
        $this->item = $item;
        $this->request = $request;
    }

    /**
     * @return mixed
     */
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
                'description' => 'required|string|max:200',
                'image' => 'mimes:jpeg, jpg, png | max:1000',
                'text' => 'required'
            ], $massages);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (view()->exists('admin.itemsAdmin')) {
            $items = $this->item->orderByRaw('created_at desc')->paginate(9);
            return view('admin.itemsAdmin', ['items' => $items]);
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
        return view('admin.addItemAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (view()->exists('admin.addItemAdmin')) {
            if ($this->request->isMethod('post')) {
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('item.create')->withErrors($validator)->withInput();
                }

                if ($this->request->image) {
                    $photoName = time() . '.' . $this->request->image->getClientOriginalExtension();
                    $this->request->image->move(public_path('img'), $photoName);
                } else {
                    $photoName = 'Unesco-Logo.png';
                }


                $this->item->create
                ([
                    'user_id' => $this->request->input('user_id'),
                    'title' => $this->request->input('title'),
                    'text' => $this->request->input('text'),
                    'description' => $this->request->input('description'),
                    'image' => $photoName?:'Unesco-Logo.png',
                ]);
                return redirect()->route('item.index');
            }
        }
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (view()->exists('admin.itemAdmin')) {
            $item = $this->item->find($id);
            return view('admin.itemAdmin', ['item' => $item]);
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
        $old = $this->item->find($id)->toArray();
        $data = [
            'id' => $old['id'],
            'title' => $old['title'],
            'text' => $old['text'],
            'description' => $old['description'],
            'image'=>$old['image']
        ];
        return view('admin.editItemAdmin', ['data' => $data]);
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
        if (view()->exists('admin.editItemAdmin')) {
            if ($this->request->isMethod('put')) {
                $input = $this->request->all();
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('item.edit', $id)->withErrors($validator)->withInput();
                }

                $this->item->fill($input);

                if ($this->request->image) {
                    $photoName = time() . '.' . $this->request->image->getClientOriginalExtension();
                    $this->request->image->move(public_path('img'), $photoName);
                } else {
                    $photoName = $this->item->image;

                }


                $this->item->where('id', $id)->update
                ([
                    'title' => $input['title'],
                    'description' => $input['description'],
                    'text' => $input['text'],
                    'image' => $photoName?:'Unesco-Logo.png',
                ]);
               return redirect()->route('item.show', $id);
//                return view('admin.itemAdmin', ['item' => $this->item]);

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
    public function destroy($id)
    {

        $item = $this->item->find($id);
        if ($this->item->image != 'Unesco-Logo.png') {
            $image_path = public_path('img/' . $this->item->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        foreach ($item->comments as $comment)
        {
            $comment->delete();
        }
        $item->delete();
        return redirect()->route('item.index');
    }
}
