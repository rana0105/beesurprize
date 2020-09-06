<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class UpcomingContest extends Model
{
    protected $fillable = [
        'user_id', 'title', 'p_details', 'c_details', 'price', 'prize_type', 'makers', 'start_date', 'g_image', 'f_image', 'question', 'ans_a', 'ans_b', 'ans_c', 'ans_d', 'ans_ai', 'ans_bi', 'ans_ci', 'ans_di', 'correct_a', 'mile', 'speed', 'power', 'displacement', 'bhp', 'year', 'status', 'action',
    ];

    public function upcomingImageGallery()
    {
    	return $this->hasMany('App\Model\Backend\UpcomingImage', 'upcoming_contest_id');
    }
}
