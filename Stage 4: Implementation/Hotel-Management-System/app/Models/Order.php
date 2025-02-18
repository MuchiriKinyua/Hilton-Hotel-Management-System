<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    public $fillable = [
        'guest_id',
        'order_details',
        'amount',
        'status'
    ];

    protected $casts = [
        'amount' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'guest_id' => 'nullable',
        'order_details' => 'nullable',
        'amount' => 'nullable|string|max:20',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function guest(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Guest::class, 'guest_id');
    }
}
