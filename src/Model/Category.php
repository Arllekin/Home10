<?php

namespace Hillel\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'categories';

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    protected $fillable = [
        'title',
        'slug',
    ];
}