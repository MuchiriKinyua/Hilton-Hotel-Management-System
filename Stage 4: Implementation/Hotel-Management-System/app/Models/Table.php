<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public $table = 'tables';

    public $fillable = [
        'table_number',
        'capacity',
        'status',
        'location'
    ];

    protected $casts = [
        'capacity' => 'string',
        'status' => 'string',
        'location' => 'string'
    ];

    public static array $rules = [
        'table_number' => 'nullable',
        'capacity' => 'nullable|string|max:20',
        'status' => 'nullable|string|max:20',
        'location' => 'nullable|string|max:50',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
