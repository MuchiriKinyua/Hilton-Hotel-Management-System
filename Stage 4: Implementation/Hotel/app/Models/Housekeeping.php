<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housekeeping extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id', 
        'status', 
        'assigned_staff_id', 
        'cleaning_date',
        'completion_time', 
        'supplies_used', 
        'inspection_status', 
        'notes'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'assigned_staff_id');
    }
}

