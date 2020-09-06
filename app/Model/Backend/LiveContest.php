<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class LiveContest extends Model
{
    protected $fillable = [
        'user_id', 'title', 'p_details', 'c_details', 'contest_no', 'amount', 'price', 'prize_type', 'makers', 'end_date', 'g_image', 'f_image', 'question', 'ans_a', 'ans_b', 'ans_c', 'ans_d', 'ans_ai', 'ans_bi', 'ans_ci', 'ans_di', 'correct_a', 'mile', 'speed', 'power', 'displacement', 'bhp', 'year', 'status', 'action',
    ];

    public function liveImageGallery()
    {
    	return $this->hasMany('App\Model\Backend\LiveImage', 'live_contest_id');
    }

    public function liveContestCount()
    {
    	return $this->hasMany('App\Model\Backend\TicketBook', 'live_contest_id');
    }
}
