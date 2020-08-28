<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\ArticleReplied;

class ReplyObserver
{
    public function created(Reply $reply)
    {
       
        $reply->articles->user->notify(new ArticleReplied($reply));
    }
}
