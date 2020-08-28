<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Auth;
use App\Models\User;

class PagesController extends Controller
{
    // public function index()
    // {
    //     $feed_items = Article::where([])->orderBy('created_at', 'desc')->get();
    //     $user=Auth::user();
    //     return view('article.index', compact('feed_items','user'));
    // }

    public function index(Request $request, Article $article)
    {    
        $feed_items = $article->withOrder($request->order)
                        ->with('user', 'category')  // 预加载防止 N+1 问题
                        ->paginate(20);
        return view('article.index', compact('feed_items'));
    }

    public function attentionIndex()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }
        return view('article.index', compact('feed_items'));
    }

    // 文章详情显示
    public function show(Article $article, User $user,Request $request)
    {

         // URL 矫正
         if ( ! empty($article->slug) && $article->slug != $request->slug) {
            return redirect($article->link(), 301);
        }
        $comments = $article->replies()->where('replies_id', 0)->with('user')->get();
        $replies = $article->replies()->where('replies_id','!=', 0)->with('user')->get();
        
        return view('article.show', compact('article', 'user','comments','replies'));
    }

    public function permissionDenied()
    {
        // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('layouts.permission_denied');
    }
}
