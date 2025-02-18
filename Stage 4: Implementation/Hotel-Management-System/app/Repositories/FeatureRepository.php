<?php

namespace App\Repositories;

use App\Models\Feature;
use App\Repositories\BaseRepository;

class FeatureRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'hotel',
        'days_in_waiting_list',
        'agent_involved',
        'reserved_is_assigned',
        'has_special_requests',
        'customer_type',
        'deposit_type',
        'is_repeated_guest',
        'distribution_channel',
        'market_segment'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Feature::class;
    }
}
