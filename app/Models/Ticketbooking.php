<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticketbooking extends Model
{
    protected $table =  'ticket_bookings';
    protected $fillable = ['name', 'email', 'number', 'city', 'tickets_count'];
}
