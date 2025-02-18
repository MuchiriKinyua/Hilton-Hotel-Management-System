<?php

namespace App\Repositories;

use App\Models\Table;
use App\Repositories\BaseRepository;

class TableRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'table_number',
        'capacity',
        'status',
        'location'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Table::class;
    }
}
