<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $table = 'feedback';

    public $fillable = [
        'guest_id',
        'comments',
        'rating',
        'submitted_at'
    ];

    protected $casts = [
        'comments' => 'string',
        'rating' => 'string',
        'submitted_at' => 'datetime'
    ];

    public static array $rules = [
        'guest_id' => 'nullable',
        'comments' => 'nullable|string|max:600',
        'rating' => 'nullable|string|max:20',
        'submitted_at' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function guest(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Guest::class, 'guest_id');
    }
}
