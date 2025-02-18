<?php

namespace App\Repositories;

use App\Models\Logged;
use App\Repositories\BaseRepository;

class LoggedRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'login_time',
        'logout_time',
        'ip_address',
        'device_info',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Logged::class;
    }
}
