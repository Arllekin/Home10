<?php

namespace Hillel\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }

    protected $table = 'tags';
    protected $fillable = [
        'title',
        'slug',
    ];

}