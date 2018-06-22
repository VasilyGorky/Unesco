<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;


class PageController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (view()->exists('site.page')) {
            $page = $this->page->find($id);
            return view('site.page',['page'=>$page]);
        }
        abort(404);
    }

}
