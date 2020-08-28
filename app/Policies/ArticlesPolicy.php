<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlesPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(Article $article,User $user)
    {
        return $article->user_id === $user->id;
    }

    public function destroy(User $user, Article $article)
    {
        return $user->id === $article->user_id;
    }
}
