<?php

namespace App\Repositories;

use App\Models\Occupation;
use App\Repositories\BaseRepository;

class OccupationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'room_type',
        'max_occupancy',
        'price_per_night',
        'extra_guest_charge',
        'check_in_time',
        'check_out_time',
        'allowed_smoking',
        'pet_friendly'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Occupation::class;
    }
}
