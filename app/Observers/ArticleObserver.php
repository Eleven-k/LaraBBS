<?php

namespace App\Observers;

use App\Models\Article;
use App\Jobs\TranslateSlug;
use App\Handlers\SlugTranslateHandler;

class ArticleObserver
{
    public function saving(Article $article)
    {
       
        $article->excerpt = make_excerpt($article->content);

        if(! $article->slug){
            $article->slug=app(SlugTranslateHandler::class)->translate($article->title);
        }
    }
    
}
