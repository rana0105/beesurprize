<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'ans_a', 'ans_b', 'ans_c', 'ans_d', 'ans_ai', 'ans_bi', 'ans_ci', 'ans_di', 'correct_a', 'status',
    ];
}
