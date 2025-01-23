<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_reference',
        'amount_paid',
        'payment_date',
        'payment_method',
        'daily_rate',
        'total_stay_cost',
        'number_of_nights',
        'is_deposit_made'
    ];
}
