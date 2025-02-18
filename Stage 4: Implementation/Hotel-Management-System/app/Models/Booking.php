<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table = 'bookings';

    public $fillable = [
        'room_id',
        'name',
        'email',
        'phone',
        'amount',
        'status',
        'start_date',
        'end_date',
        'TransactionType',
        'TransID',
        'TransTime',
        'TransAmount',
        'BusinessShortCode',
        'BillRefNumber',
        'InvoiceNumber',
        'OrgAccountBalance',
        'ThirdPartyTransID',
        'MSISDN',
        'FirstName',
        'MiddleName',
        'LastName'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'amount' => 'string',
        'status' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'TransactionType' => 'string',
        'TransID' => 'string',
        'TransTime' => 'string',
        'TransAmount' => 'decimal:2',
        'BusinessShortCode' => 'string',
        'BillRefNumber' => 'string',
        'InvoiceNumber' => 'string',
        'OrgAccountBalance' => 'decimal:2',
        'ThirdPartyTransID' => 'string',
        'MSISDN' => 'string',
        'FirstName' => 'string',
        'MiddleName' => 'string',
        'LastName' => 'string'
    ];

    public static array $rules = [
        'room_id' => 'nullable',
        'name' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'amount' => 'nullable|string|max:255',
        'status' => 'required|string|max:255',
        'start_date' => 'nullable|string|max:255',
        'end_date' => 'nullable|string|max:255',
        'TransactionType' => 'nullable|string|max:255',
        'TransID' => 'nullable|string|max:255',
        'TransTime' => 'nullable|string|max:255',
        'TransAmount' => 'nullable|numeric',
        'BusinessShortCode' => 'nullable|string|max:255',
        'BillRefNumber' => 'nullable|string|max:255',
        'InvoiceNumber' => 'nullable|string|max:255',
        'OrgAccountBalance' => 'nullable|numeric',
        'ThirdPartyTransID' => 'nullable|string|max:255',
        'MSISDN' => 'nullable|string|max:255',
        'FirstName' => 'nullable|string|max:255',
        'MiddleName' => 'nullable|string|max:255',
        'LastName' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function room(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Room::class, 'room_id');
    }

    public function payments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Payment::class, 'booking_id');
    }
}
