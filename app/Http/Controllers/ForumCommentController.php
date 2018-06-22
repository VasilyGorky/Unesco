<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

class ForumCommentController extends Controller
{

    public function store(Request $request)
    {

        $data = $request->except( 'comment_forum_ID');

        //добавляем поля с названиями как в таблице (модели)
        $data['forum_id'] = $request->input('comment_forum_ID');
        $data['parent_id'] = $request->input('comment_parent');


        //устанавливаем статус в зависимости от настройки
        $data['status'] = config('comments.show_immediately');


        $user = Auth::user();

        if($user) {
            $data['user_id'] = $user->id;
            $data['firstname'] = (!empty($data['firstname'])) ? $data['firstname'] : $user->firstname;
            $data['email'] = (!empty($data['email'])) ? $data['email'] : $user->email;
            $data['gender'] = (!empty($data['gender'])) ? $data['gender'] : $user->gender;
        }



        $validator = Validator::make($data,[
            'item_id' => 'integer|required',
            'text' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
        ]);

        $comment = new Comment($data);


        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }


        $forum = Forum::find($data['forum_id']);

        $forum->comments()->save($comment);


        $data['id'] = $comment->id;
        $data['hash'] = md5($data['email']);
        $data['status'] = config('comments.show_immediately');




        $view_comment = view(env('THEME').'.comments.new_comment')->with('data', $data)->render();

        return response()->json(['success'=>true, 'comment'=>$view_comment, 'data'=>$data]);



    }

    public function destroy($id)
    {
        $comment = new Comment();

        $comment = $comment->find($id);

        $comments = $comment->all()->where('parent_id',$id);
        $comment->delete();
        foreach ($comments as $comment) {
            $comment->delete();
        }


        return back();
    }
}
