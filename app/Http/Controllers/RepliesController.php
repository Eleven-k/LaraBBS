<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use Auth;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 文章评论
    public function store(Request $request, Reply $reply)
    {
        $this->validate($request, [
            'content' => 'required|min:2',
        ]);

        $reply->content = $request->content;
        $reply->user_id = Auth::id();
        $reply->article_id = $request->article_id;
        $reply->save();
        return redirect()->route('show',$reply->article_id)->with('success', '评论创建成功！');
    }

    // 评论的回复
    public function replyStore(Request $request, Reply $reply)
    {
        $this->validate($request, [
            'content' => 'required|min:2',
        ]);

        $reply->content = $request->content;
        $reply->user_id = Auth::id();
        $reply->replies_id = $request->replies_id;
        $reply->article_id = $request->article_id;
        $reply->save();
        session()->flash('success', '评论创建成功！');
        return redirect()->back();
    }

     // 评论删除
     public function replyDestroy(Reply $reply)
     {
         // $this->authorize('destroy', $reply);
         $reply->delete();
         session()->flash('success', '评论已被成功删除！');
        return redirect()->back();
     }
}
