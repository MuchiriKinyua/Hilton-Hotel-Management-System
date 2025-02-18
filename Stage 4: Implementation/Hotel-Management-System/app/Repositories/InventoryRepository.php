<?php

namespace App\Repositories;

use App\Models\Inventory;
use App\Repositories\BaseRepository;

class InventoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'item_name',
        'category',
        'quantity',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Inventory::class;
    }
}
