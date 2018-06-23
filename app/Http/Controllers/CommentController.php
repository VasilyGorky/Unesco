<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Item;


class CommentController extends Controller
{

    public function index()
    {
        if (view()->exists('admin.commentsAdmin')) {
            $comment = new Comment();

            $comments = $comment->orderByRaw('created_at desc')->paginate(20);

            return view('admin.commentsAdmin', ['comments' => $comments]);
        }
        abort(404);
    }

    public function update($id)
    {
        $comment = new Comment();
        $comments = $comment->find($id);

        if ($comments->status == false) {
            $comment->where('id', $id)->update
            ([
                'status' => true,
            ]);

        } else {
            $comments->where('id', $id)->update
            ([
                'status' => false,
            ]);
        }
        return redirect()->back();
    }

    /**
     * Обработка формы - AJAX
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $data = $request->except('comment_item_ID');

        //добавляем поля с названиями как в таблице (модели)
        $data['item_id'] = $request->input('comment_item_ID');
        $data['parent_id'] = $request->input('comment_parent');


        //устанавливаем статус в зависимости от настройки
        $data['status'] = false;


        $user = Auth::user();

        if ($user) {
            $data['user_id'] = $user->id;
            $data['firstname'] = (!empty($data['firstname'])) ? $data['firstname'] : $user->firstname;
            $data['email'] = (!empty($data['email'])) ? $data['email'] : $user->email;
            $data['gender'] = (!empty($data['gender'])) ? $data['gender'] : $user->gender;
        }


        $validator = Validator::make($data, [
            'item_id' => 'integer|required',
            'text' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
        ]);

        $comment = new Comment($data);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }


        $item = Item::find($data['item_id']);

        $item->comments()->save($comment);


        $data['id'] = $comment->id;
        $data['hash'] = md5($data['email']);
        $data['status'] = config('comments.show_immediately');


        $view_comment = view(env('THEME') . '.comments.new_comment')->with('data', $data)->render();

        return response()->json(['success' => true, 'comment' => $view_comment, 'data' => $data]);


    }

    public function destroy($id)
    {
        $comment = new Comment();

        $comment = $comment->find($id);

        $comments = $comment->all()->where('parent_id', $id);
        $comment->delete();
        foreach ($comments as $comment) {
            $comment->delete();
        }
        return back();
    }

}
