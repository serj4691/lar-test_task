<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'description', 
        'appointment', 
        'price', 
        'published_at', 
        'finished_at', 
        'courier_id'
    ];
}
