<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    private $item;

    /**
     * ItemsController constructor.
     * @param Item $item
     * @param Request $request
     */
    public function __construct(Item $item)
    {
        $this->item = $item;

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {


        if (view()->exists('site.items')) {


            $items = $this->item->orderByRaw('created_at desc')->paginate(9);
            return view('site.items', ['items' => $items]);
        }
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        if (view()->exists('site.item')) {
            $item = $this->item->find($id);

            return view('site.item', ['item' => $item]);
        }
        abort(404);
    }
}
