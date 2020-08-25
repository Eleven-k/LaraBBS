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
    public function store(Request $request, Reply $reply)
    {
        $this->validate($request, [
            'content' => 'required|min:2',
        ]);

        $reply->content = $request->content;
        $reply->user_id = Auth::id();
        $reply->article_id = $request->article_id;
        dd($reply->article_id);
        $reply->save();
        return redirect()->to($reply->article->link())->with('success', '评论创建成功！');
    }
    public function destroy(Reply $reply)
    {
        $this->authorize('destroy', $reply);
        $reply->delete();
        return redirect()->route('replies.index')->with('success', '评论删除成功！');
    }
}
