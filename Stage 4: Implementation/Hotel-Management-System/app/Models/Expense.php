<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $table = 'expenses';

    public $fillable = [
        'category',
        'amount',
        'payment_method_id',
        'description',
        'date'
    ];

    protected $casts = [
        'category' => 'string',
        'amount' => 'string',
        'description' => 'string',
        'date' => 'datetime'
    ];

    public static array $rules = [
        'category' => 'nullable|string|max:100',
        'amount' => 'nullable|string|max:100',
        'payment_method_id' => 'nullable',
        'description' => 'nullable|string|max:600',
        'date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
