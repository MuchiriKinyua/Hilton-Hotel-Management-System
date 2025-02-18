<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logged extends Model
{
    public $table = 'loggeds';

    public $fillable = [
        'user_id',
        'login_time',
        'logout_time',
        'ip_address',
        'device_info',
        'status'
    ];

    protected $casts = [
        'login_time' => 'datetime',
        'logout_time' => 'datetime',
        'ip_address' => 'string',
        'device_info' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'login_time' => 'nullable',
        'logout_time' => 'nullable',
        'ip_address' => 'nullable|string|max:100',
        'device_info' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
