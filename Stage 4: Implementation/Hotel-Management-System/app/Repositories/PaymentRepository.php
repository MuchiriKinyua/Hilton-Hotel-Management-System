<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\BaseRepository;

class PaymentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'booking_id',
        'guest_id',
        'amount',
        'payment_method',
        'payment_status',
        'transaction_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Payment::class;
    }
}
