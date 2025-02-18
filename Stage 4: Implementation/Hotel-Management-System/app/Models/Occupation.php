<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public $table = 'occupations';

    public $fillable = [
        'room_type',
        'max_occupancy',
        'price_per_night',
        'extra_guest_charge',
        'check_in_time',
        'check_out_time',
        'allowed_smoking',
        'pet_friendly'
    ];

    protected $casts = [
        'room_type' => 'string',
        'max_occupancy' => 'string',
        'price_per_night' => 'string',
        'extra_guest_charge' => 'string',
        'check_in_time' => 'datetime',
        'check_out_time' => 'datetime',
        'allowed_smoking' => 'string',
        'pet_friendly' => 'string'
    ];

    public static array $rules = [
        'room_type' => 'nullable|string|max:50',
        'max_occupancy' => 'nullable|string|max:20',
        'price_per_night' => 'nullable|string|max:20',
        'extra_guest_charge' => 'nullable|string|max:20',
        'check_in_time' => 'nullable',
        'check_out_time' => 'nullable',
        'allowed_smoking' => 'nullable|string|max:50',
        'pet_friendly' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
