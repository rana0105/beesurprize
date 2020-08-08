<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'detail', 'blog_image',
    ];
}
