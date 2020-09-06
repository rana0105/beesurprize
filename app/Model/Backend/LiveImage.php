<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class LiveImage extends Model
{
    protected $fillable = [
        'live_contest_id', 'live_image_gallery'
    ];
}
