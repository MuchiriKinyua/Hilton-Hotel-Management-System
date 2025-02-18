<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public $table = 'inventories';

    public $fillable = [
        'item_name',
        'category',
        'quantity',
        'status'
    ];

    protected $casts = [
        'item_name' => 'string',
        'category' => 'string',
        'quantity' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'item_name' => 'nullable|string|max:100',
        'category' => 'nullable|string|max:100',
        'quantity' => 'nullable|string|max:50',
        'status' => 'nullable|string|max:50',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
