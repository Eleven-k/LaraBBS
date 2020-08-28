<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category, Request $request, Article $article)
    {
        
        $article = $article->withOrder($request->order)
                        ->where('category_id', $category->id)
                        ->with('user', 'category')   
                        ->paginate(20);
        
        return view('article.index', compact('article', 'category'));
    }
}
