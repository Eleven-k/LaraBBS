<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timastamps=false;

    protected $fillable = [
        'name','description',
    ];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
