<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Auth;

class PagesController extends Controller
{
    public function index()
    {
        $feed_items = Article::where([])->orderBy('created_at', 'desc')->get();
        $user=Auth::user();
        return view('article.index', compact('feed_items','user'));
    }
}
