<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Room extends Model
{
    use HasFactory;
    
    protected $keyType = 'string'; // Define UUID as a string
    public $incrementing = false; // Disable auto-incrementing ID

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid(); // Generate UUID
        });
    }

    protected $fillable = [
        'room_title',
        'image',
        'description',
        'amount',
        'wifi',
        'room_type'
    ];
}
