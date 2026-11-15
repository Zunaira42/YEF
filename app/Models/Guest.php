<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guest';
    protected $fillable = ['name', 'designation', 'logo_image_path', 'guest_type'];
}
