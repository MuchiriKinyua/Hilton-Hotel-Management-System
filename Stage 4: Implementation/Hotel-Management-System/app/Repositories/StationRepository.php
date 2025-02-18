<?php

namespace App\Repositories;

use App\Models\Station;
use App\Repositories\BaseRepository;

class StationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'manager_id',
        'location',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Station::class;
    }
}
