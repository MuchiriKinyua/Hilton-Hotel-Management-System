<?php

namespace App\Repositories;

use App\Models\Guest;
use App\Repositories\BaseRepository;

class GuestRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'email',
        'phone',
        'address',
        'id_proof'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Guest::class;
    }
}
