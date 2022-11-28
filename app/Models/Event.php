<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $table = "event";

    public $timestamps = false;

    protected $fillable = [
        'title', 
        'date'
    ];
}
