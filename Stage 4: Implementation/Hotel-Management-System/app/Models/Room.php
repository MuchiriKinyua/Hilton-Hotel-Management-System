<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $table = 'rooms';

    public $fillable = [
        'room_title',
        'image',
        'description',
        'amount',
        'wifi',
        'room_type'
    ];

    protected $casts = [
        'room_title' => 'string',
        'image' => 'string',
        'description' => 'string',
        'amount' => 'string',
        'wifi' => 'string',
        'room_type' => 'string'
    ];

    public static array $rules = [
        'room_title' => 'nullable|string|max:255',
        'image' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'amount' => 'nullable|string|max:255',
        'wifi' => 'required|string|max:255',
        'room_type' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function bookings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Booking::class, 'room_id');
    }

    public function housekeepings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Housekeeping::class, 'room_id');
    }
}
