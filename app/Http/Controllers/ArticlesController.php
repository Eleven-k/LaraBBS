<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Auth;
use App\Models\User;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('guest', [
            'only' => ['show']
        ]);
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
        $this->validate($request, [
            'title' => 'required|min:3|max:30',
            'content' => 'required|min:3',
        ]);

        $article->fill($request->all());
        $article->user_id = Auth::id();
        $article->save();

        return redirect()->route('index', $article->id)->with('success', '文章创建成功！');
    }

    // 创建文章图片上传
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        $data = [
            'success' => false,
            'msg'    => '上传失败!',
            'file_path' => ''
        ];
        if ($file = $request->upload_file) {
            $result = $uploader->save($file, 'article', \Auth::id(), 1024);
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg'] = "上传成功！";
                $data['success'] = true;
            }
        }
        return $data;
    }

    // 编辑文章页面
    public function edit(Article $article)
    {
        $this->authorize('update', $article);
        $categories = Category::all();
        return view('article.edit', compact('article', 'categories'));
    }

    // 编辑文章方法
    public function update(Article $article, Request $request)
    {
        // $this->authorize('update', $article);
        $article->update($request->all());
        return redirect()->route('index', $article->id)->with('success', '更新成功！');
    }

    // 删除文章
    public function destroy(Article $article)
    {
       $this->authorize('destroy',$article);
        $article->delete();
        session()->flash('success', '文章已被成功删除！');
        return redirect()->route('index', $article->id);
    }

    
}
