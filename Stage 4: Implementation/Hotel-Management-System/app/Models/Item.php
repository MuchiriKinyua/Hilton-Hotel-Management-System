<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = 'items';

    public $fillable = [
        'full_name',
        'category',
        'price',
        'description',
        'availability_status'
    ];

    protected $casts = [
        'full_name' => 'string',
        'category' => 'string',
        'price' => 'string',
        'description' => 'string',
        'availability_status' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'category' => 'nullable|string|max:100',
        'price' => 'nullable|string|max:20',
        'description' => 'nullable|string|max:600',
        'availability_status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
