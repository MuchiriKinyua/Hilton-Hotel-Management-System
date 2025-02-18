<?php

namespace App\Repositories;

use App\Models\Room;
use App\Repositories\BaseRepository;

class RoomRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'room_title',
        'image',
        'description',
        'amount',
        'wifi',
        'room_type'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Room::class;
    }
}
