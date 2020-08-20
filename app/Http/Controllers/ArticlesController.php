<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticlesController extends Controller
{
    public function create(Article $article)
    {
        $categories = Category::all();
        return view('article.create', compact('article', 'categories'));
    }
}
