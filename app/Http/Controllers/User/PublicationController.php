<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PublicationController extends Controller
{
    private $publication;
    private $request;

    /**
     * ItemsController constructor.
     * @param Publication $publication
     * @param Request $request
     */
    public function __construct(Publication $publication, Request $request)
    {
        $this->publication = $publication;
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
                'author' => 'required|string|max:150',
                'name' => 'required|string|max:300',
                'city' => 'required|string|max:50',
                'year' => 'required|numeric',
                'image' => 'mimes:jpeg, jpg, png, gif | max:5000',
                'file' => 'mimes:pdf, doc, docx | max:40000',
            ], $massages);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (view()->exists('site.publications')) {
            $publication = $this->publication->orderByRaw('year desc')->paginate(10);
            return view('site.publications', ['publications' => $publication]);
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
        if(Auth::user()->isAdmin() or Auth::user()->isWorker()){
        return view('site.addPublication');
        }
        else return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (view()->exists('site.addPublication')) {
            if ($this->request->isMethod('post')) {
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('publication.create')->withErrors($validator)->withInput();
                }

                if ($this->request->image) {
                    $photoName = time() . '.' . $this->request->image->getClientOriginalExtension();
                    $this->request->image->move(public_path('img'), $photoName);
                } else {
                    $photoName = 'book.png';
                }
                if ($this->request->file) {
                    $fileName = time() . '.' . $this->request->file->getClientOriginalExtension();
                    $this->request->file->move(public_path('document'), $fileName);
                } else {
                    $fileName = '';
                }


                $this->publication->create
                ([
                    'author' => $this->request->input('author'),
                    'name' => $this->request->input('name'),
                    'city' => $this->request->input('city'),
                    'year' => $this->request->input('year'),
                    'file'=> $fileName ?:'0',
                    'image' => $photoName?:'book.png',
                ]);
                return redirect()->route('publication.index');
            }
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
        $old = $this->publication->find($id)->toArray();
        $data = [
            'id' => $old['id'],
            'author' => $old['author'],
            'name' => $old['name'],
            'city' => $old['city'],
            'year' => $old['year'],
            'file'=> $old['file'],
            'image' => $old['image'],
        ];
        if(Auth::user()->isAdmin() or Auth::user()->isWorker()){
        return view('site.editPublication', ['data' => $data]);
        }
        else return abort(404);
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
        if (view()->exists('site.editPublication')) {
            if ($this->request->isMethod('put')) {
                $input = $this->request->all();
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('publication.edit', $id)->withErrors($validator)->withInput();
                }

                $this->publication->fill($input);

                if ($this->request->image) {
                    $photoName = time() . '.' . $this->request->image->getClientOriginalExtension();
                    $this->request->image->move(public_path('img'), $photoName);
                } else {
                    $photoName = $this->publication->image;
                }
                if ($this->request->file) {
                    $fileName = time() . '.' . $this->request->file->getClientOriginalExtension();
                    $this->request->file->move(public_path('document'), $fileName);
                } else {
                    $fileName = $this->publication->file;
                }


                $this->publication->where('id', $id)->update
                ([
                    'author' => $input['author'],
                    'name' => $input['name'],
                    'city' => $input['city'],
                    'year' => $input['year'],
                    'file'=> $fileName?:'0',
                    'image' => $photoName?:'book.png',
                ]);
                return redirect()->route('publication.index');
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
        if(Auth::user()->isAdmin()){
        $publication = $this->publication->find($id);
        if ($this->publication->image != 'book.png') {
            $image_path = public_path('img/' . $this->publication->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $file_path = public_path('document/' . $this->publication->file);
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $publication->delete();
        return redirect()->route('publication.index');
    }
else return abort(404);
    }

    public function getDownload($id)
    {
        $publication = $this->publication->find($id);
        $file= public_path()."/document/".$publication->file;

        $headers = array(
            'Content-Type' => 'application/pdf',
        );
        return response()->download($file, "UNESCO-".$publication->name.".pdf",$headers);
    }

}
