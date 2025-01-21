<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'name',
        'email',
        'phone',
        'amount',
        'start_date',
        'end_date',
        'market_segment',
        'distribution_channel',
        'is_repeated_guest',
        'deposit_type',
        'customer_type',
        'has_special_requests',
        'reserved_is_assigned',
        'agent_involved'
    ];

    public function room(){
        return $this->hasOne('App\Models\Room', 'id', 'room_id');
    }
}
