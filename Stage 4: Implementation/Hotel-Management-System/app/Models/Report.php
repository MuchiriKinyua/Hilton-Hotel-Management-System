<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = 'reports';

    public $fillable = [
        'report_type',
        'generated_by',
        'report_data'
    ];

    protected $casts = [
        'report_type' => 'string',
        'generated_by' => 'string',
        'report_data' => 'string'
    ];

    public static array $rules = [
        'report_type' => 'nullable|string|max:100',
        'generated_by' => 'nullable|string|max:100',
        'report_data' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
