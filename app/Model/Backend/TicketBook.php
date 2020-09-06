<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class TicketBook extends Model
{
    protected $fillable = [
        'user_id', 'live_contest_id', 'ticket_number', 'ticket_amount',
    ];
}
