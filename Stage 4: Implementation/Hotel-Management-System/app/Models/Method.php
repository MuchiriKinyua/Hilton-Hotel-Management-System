<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    public $table = 'methods';

    public $fillable = [
        'name',
        'provider',
        'transaction_fee',
        'status'
    ];

    protected $casts = [
        'name' => 'string',
        'provider' => 'string',
        'transaction_fee' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'provider' => 'nullable|string|max:100',
        'transaction_fee' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
