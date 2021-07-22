<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id', 'title','description','image','type','location','when','starts','duration',
        'status','store','pkids','padults'
        ];
}
