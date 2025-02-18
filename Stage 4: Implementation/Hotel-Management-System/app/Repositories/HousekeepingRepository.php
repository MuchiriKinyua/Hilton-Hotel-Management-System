<?php

namespace App\Repositories;

use App\Models\Housekeeping;
use App\Repositories\BaseRepository;

class HousekeepingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'room_id',
        'status',
        'assigned_staff_id',
        'cleaning_date',
        'completion_time',
        'supplies_used',
        'inspection_status',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Housekeeping::class;
    }
}
