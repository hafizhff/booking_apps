<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\Seat;

class Booking extends Model
{
    use HasFactory;

    public $table = "booking";

    public $timestamps = false;

    protected $fillable = [
        'fullname', 
        'email',
        'title',
        'notes',
        'seat_id',
        'event_id'
    ];

    /**
     * Get Reference to Event Table
     *
     * @return void
     */
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    /**
     * Get Reference to Seat Table
     *
     * @return void
     */
    public function seat()
    {
        return $this->belongsTo(Seat::class, 'seat_id');
    }
}
