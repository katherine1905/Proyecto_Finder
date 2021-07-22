<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    protected $fillable = [
        'events_id',
        'fullname',
        'email',
        'qkids',
        'qadults',
        'total'
    ];
}
