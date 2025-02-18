<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $table = 'transactions';

    public $fillable = [
        'daily_rate',
        'total_stay_cost',
        'number_of_nights',
        'is_deposit_made'
    ];

    protected $casts = [
        'daily_rate' => 'string',
        'total_stay_cost' => 'string',
        'number_of_nights' => 'string',
        'is_deposit_made' => 'string'
    ];

    public static array $rules = [
        'daily_rate' => 'nullable|string|max:255',
        'total_stay_cost' => 'nullable|string|max:255',
        'number_of_nights' => 'nullable|string|max:255',
        'is_deposit_made' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
