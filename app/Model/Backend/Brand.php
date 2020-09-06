<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'status',
    ];
}
