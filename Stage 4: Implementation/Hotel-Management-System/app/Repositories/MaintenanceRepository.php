<?php

namespace App\Repositories;

use App\Models\Maintenance;
use App\Repositories\BaseRepository;

class MaintenanceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'item',
        'issue_description',
        'reported_by',
        'assigned_to',
        'status',
        'repair_cost',
        'date_reported',
        'completion_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Maintenance::class;
    }
}
