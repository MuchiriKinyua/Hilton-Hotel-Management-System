<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $table = 'invoices';

    public $fillable = [
        'bill_id',
        'customer_id',
        'amount',
        'due_date',
        'payment_status',
        'invoice_date'
    ];

    protected $casts = [
        'amount' => 'string',
        'due_date' => 'date',
        'payment_status' => 'string',
        'invoice_date' => 'date'
    ];

    public static array $rules = [
        'bill_id' => 'nullable',
        'customer_id' => 'nullable',
        'amount' => 'nullable|string|max:20',
        'due_date' => 'nullable',
        'payment_status' => 'nullable|string|max:20',
        'invoice_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
