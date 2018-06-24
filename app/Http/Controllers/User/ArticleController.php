<?php

namespace App\Http\Controllers\User;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    private $article;
    private $request;

    /**
     * ItemsController constructor.
     * @param Item $item
     * @param Request $request
     */
    public function __construct(Article $article, Request $request)
    {
        $this->article = $article;
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
                'title' => 'required|string',
                'published' => 'required|string',
                'file' => 'mimes:pdf',
                'view' => 'required',
                'type' => 'required',
                'pages' => 'required|numeric',
                'link' => '',
                'author' => 'required|string',

            ], $massages);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (view()->exists('site.articles')) {
            $articles = $this->article->orderByRaw('created_at desc')->paginate(10);
            return view('site.articles', ['articles' => $articles]);
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
        return view('site.addArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (view()->exists('site.addArticle')) {
            if ($this->request->isMethod('post')) {
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('article.create')->withErrors($validator)->withInput();
                }

                if ($this->request->file) {
                    $fileName = time() . '.' . $this->request->file->getClientOriginalExtension();
                    $this->request->file->move(public_path('document'), $fileName);
                } else {
                    $fileName = '';
                }


                $this->article->create
                ([
                    'title' => $this->request->input('title'),
                    'view' => $this->request->input('view'),
                    'published' => $this->request->input('published'),
                    'file' => $fileName ?:'',
                    'type' => $this->request->input('type'),
                    'pages' => $this->request->input('pages'),
                    'link' => $this->request->input('link')?:'#',
                    'author' => $this->request->input('author'),
                ]);
                return redirect()->route('article.index');
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
        $old = $this->article->find($id)->toArray();
        $data = [
            'id' => $old['id'],
            'title' => $old['title'],
            'view' => $old['view'],
            'published' => $old['published'],
            'file' => $old['file'],
            'type' => $old['type'],
            'pages' => $old['pages'],
            'link' => $old['link'],
            'author' => $old['author'],

        ];

        return view('site.editArticle', ['data' => $data]);
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
        if (view()->exists('site.editArticle')) {
            if ($this->request->isMethod('put')) {
                $input = $this->request->all();
                $validator = $this->validateFieldsArticle();
                if ($validator->fails()) {
                    return redirect()->route('article.edit', $id)->withErrors($validator)->withInput();
                }

                $this->article->fill($input);


                if ($this->request->file) {

                    $fileName = time() . '.' . $this->request->file->getClientOriginalExtension();
                    $this->request->file->move(public_path('document'), $fileName);
                } else {
                   // $fileName = $this->article->file;
                }

if($this->request->file) {
    $this->article->where('id', $id)->update
    ([
        'title' => $input['title'],
        'view' => $input['view'],
        'published' => $input['published'],
        'file' => $fileName,
        'type' => $input['type'],
        'pages' => $input['pages'],
        'link' => $input['link'],
        'author' => $input['author'],
    ]);
    return redirect()->route('article.index');
}
else{
    $this->article->where('id', $id)->update
    ([
        'title' => $input['title'],
        'view' => $input['view'],
        'published' => $input['published'],
        'type' => $input['type'],
        'pages' => $input['pages'],
        'link' => $input['link'],
        'author' => $input['author'],
    ]);
    return redirect()->route('article.index');
}
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
        $article = $this->article->find($id);
        $file_path = public_path('document/' . $this->article->file);
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $article->delete();
        return redirect()->route('article.index');
    }

    public function getDownload($id)
    {
        $article = $this->article->find($id);
        $file= public_path()."/document/".$article->file;

        $headers = array(
            'Content-Type' => 'application/pdf',
        );
        $user = $article->users;
        $firstname = $user->firstname;
        $secondname = $user->secondname;
        return response()->download($file, $article->type."-".$firstname." ".$secondname.".pdf",$headers);
    }
}
