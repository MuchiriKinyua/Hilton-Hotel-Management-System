<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Housekeeping extends Model
{
    public $table = 'housekeepings';

    public $fillable = [
        'room_id',
        'status',
        'assigned_staff_id',
        'cleaning_date',
        'completion_time',
        'supplies_used',
        'inspection_status',
        'notes'
    ];

    protected $casts = [
        'status' => 'string',
        'cleaning_date' => 'datetime',
        'completion_time' => 'datetime',
        'supplies_used' => 'string',
        'inspection_status' => 'string',
        'notes' => 'string'
    ];

    public static array $rules = [
        'room_id' => 'nullable',
        'status' => 'nullable|string|max:50',
        'assigned_staff_id' => 'nullable',
        'cleaning_date' => 'nullable',
        'completion_time' => 'nullable',
        'supplies_used' => 'nullable|string|max:65535',
        'inspection_status' => 'nullable|string|max:20',
        'notes' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function room(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Room::class, 'room_id');
    }

    public function assignedStaff(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'assigned_staff_id');
    }
}
