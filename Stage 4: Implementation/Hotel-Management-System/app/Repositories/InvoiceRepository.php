<?php

namespace App\Repositories;

use App\Models\Invoice;
use App\Repositories\BaseRepository;

class InvoiceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'bill_id',
        'customer_id',
        'amount',
        'due_date',
        'payment_status',
        'invoice_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Invoice::class;
    }
}
