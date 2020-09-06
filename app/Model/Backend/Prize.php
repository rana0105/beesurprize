<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    protected $fillable = [
        'name', 'status',
    ];
}
