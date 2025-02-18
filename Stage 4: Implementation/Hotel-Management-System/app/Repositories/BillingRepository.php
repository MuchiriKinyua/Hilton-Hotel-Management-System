<?php

namespace App\Repositories;

use App\Models\Billing;
use App\Repositories\BaseRepository;

class BillingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_id',
        'reservation_id',
        'payment_method_id',
        'amount',
        'discount',
        'total_amount',
        'payment_status',
        'bill_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Billing::class;
    }
}
