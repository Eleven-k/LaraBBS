<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Auth;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // 创建文章页面
    public function create(Article $article)
    {
        $categories = Category::all();
        return view('article.create', compact('article', 'categories'));
    }

    // 创建文章方法
    public function store(Request $request, Article $article)
    { 
        $this->validate($request,[
            'title'=>'required|min:3|max:30',
            'content'=>'required|min:3',
        ]);
    
        $article->fill($request->all());
        $article->user_id=Auth::id();
        $article->save();
       
        return redirect()->route('index',$article->id)->with('success','文章创建成功！');
    }
}
