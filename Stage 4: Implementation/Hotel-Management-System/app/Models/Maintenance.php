<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    public $table = 'maintenances';

    public $fillable = [
        'item',
        'issue_description',
        'reported_by',
        'assigned_to',
        'status',
        'repair_cost',
        'date_reported',
        'completion_date'
    ];

    protected $casts = [
        'item' => 'string',
        'issue_description' => 'string',
        'reported_by' => 'string',
        'assigned_to' => 'string',
        'status' => 'string',
        'repair_cost' => 'string',
        'date_reported' => 'date',
        'completion_date' => 'date'
    ];

    public static array $rules = [
        'item' => 'nullable|string|max:20',
        'issue_description' => 'nullable|string|max:600',
        'reported_by' => 'nullable|string|max:100',
        'assigned_to' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:20',
        'repair_cost' => 'nullable|string|max:100',
        'date_reported' => 'nullable',
        'completion_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
