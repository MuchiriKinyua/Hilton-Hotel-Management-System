<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = 'payments';

    public $fillable = [
        'booking_id',
        'guest_id',
        'amount',
        'payment_method',
        'payment_status',
        'transaction_date'
    ];

    protected $casts = [
        'amount' => 'string',
        'payment_method' => 'string',
        'payment_status' => 'string',
        'transaction_date' => 'date'
    ];

    public static array $rules = [
        'booking_id' => 'nullable',
        'guest_id' => 'nullable',
        'amount' => 'nullable|string|max:50',
        'payment_method' => 'nullable|string|max:100',
        'payment_status' => 'nullable|string|max:100',
        'transaction_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function booking(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Booking::class, 'booking_id');
    }

    public function guest(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Guest::class, 'guest_id');
    }
}
