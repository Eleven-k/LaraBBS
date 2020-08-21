<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'title', 'content', 'category_id', 'excerpt',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
