<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
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
}