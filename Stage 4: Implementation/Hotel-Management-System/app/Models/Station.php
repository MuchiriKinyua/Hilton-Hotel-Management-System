<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public $table = 'stations';

    public $fillable = [
        'full_name',
        'manager_id',
        'location',
        'status'
    ];

    protected $casts = [
        'full_name' => 'string',
        'location' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'manager_id' => 'nullable',
        'location' => 'nullable|string|max:50',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
