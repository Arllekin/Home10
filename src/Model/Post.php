<?php

namespace Hillel\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table = "posts";

    public function catregory()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    protected $fillable = [
        'title',
        'slug',
        'body',
        'category_id',
    ];
}