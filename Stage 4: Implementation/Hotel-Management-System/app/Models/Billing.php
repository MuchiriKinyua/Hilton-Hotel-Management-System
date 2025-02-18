<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    public $table = 'billings';

    public $fillable = [
        'customer_id',
        'reservation_id',
        'payment_method_id',
        'amount',
        'discount',
        'total_amount',
        'payment_status',
        'bill_date'
    ];

    protected $casts = [
        'amount' => 'string',
        'discount' => 'string',
        'total_amount' => 'string',
        'payment_status' => 'string',
        'bill_date' => 'date'
    ];

    public static array $rules = [
        'customer_id' => 'nullable',
        'reservation_id' => 'nullable',
        'payment_method_id' => 'nullable',
        'amount' => 'nullable|string|max:50',
        'discount' => 'nullable|string|max:20',
        'total_amount' => 'nullable|string|max:20',
        'payment_status' => 'nullable|string|max:20',
        'bill_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
