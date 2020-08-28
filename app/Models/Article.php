<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'title', 'content', 'category_id', 'excerpt',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function scopeWithOrder($query, $order)
    {
        // 不同的排序，使用不同的数据读取逻辑
        switch ($order) {
            case 'recent':
                $query->recent();
                break;
            default:
                $query->recentReplied();
                break;
        }
    }
    public function scopeRecentReplied($query)
    {
        
        return $query->orderBy('updated_at', 'desc');
    }
    public function scopeRecent($query)
    {
       
        return $query->orderBy('created_at', 'desc');
    }

    public function link($params = [])
    {
        return route('show', array_merge([$this->id, $this->slug], $params));
    }

}
