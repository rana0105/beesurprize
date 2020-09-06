<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class WinnerList extends Model
{
    protected $fillable = [
        'user_id', 'question_id', 'question_ans', 'status',
    ];

    public function userList()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function questionList()
    {
    	return $this->belongsTo('App\Model\Backend\Question', 'question_id');
    }
}
