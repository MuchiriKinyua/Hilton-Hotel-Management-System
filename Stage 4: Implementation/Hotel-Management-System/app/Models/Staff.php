<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table = 'staff';

    public $fillable = [
        'full_name',
        'role',
        'email',
        'salary',
        'shift'
    ];

    protected $casts = [
        'full_name' => 'string',
        'role' => 'string',
        'email' => 'string',
        'salary' => 'string',
        'shift' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'role' => 'nullable|string|max:50',
        'email' => 'nullable|string|max:50',
        'salary' => 'nullable|string|max:50',
        'shift' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
