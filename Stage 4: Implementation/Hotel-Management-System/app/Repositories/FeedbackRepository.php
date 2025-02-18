<?php

namespace App\Repositories;

use App\Models\Feedback;
use App\Repositories\BaseRepository;

class FeedbackRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'guest_id',
        'comments',
        'rating',
        'submitted_at'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Feedback::class;
    }
}
