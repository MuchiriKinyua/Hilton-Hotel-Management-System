<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'daily_rate',
        'total_stay_cost',
        'number_of_nights',
        'is_deposit_made'
    ];
}
