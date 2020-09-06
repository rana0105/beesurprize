<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class UpcomingImage extends Model
{
    protected $fillable = [
        'upcoming_contest_id', 'upcoming_image_gallery'
    ];
}
