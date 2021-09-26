<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'phone', 'status'];
    // status 0 - free, 1 - have job
    public $timestamps = false;
}
