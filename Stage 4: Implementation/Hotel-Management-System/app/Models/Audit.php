<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    public $table = 'audits';

    public $fillable = [
        'user_id',
        'action',
        'table_name',
        'record_id',
        'ip_address'
    ];

    protected $casts = [
        'action' => 'string',
        'table_name' => 'string',
        'ip_address' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'action' => 'nullable|string|max:20',
        'table_name' => 'nullable|string|max:100',
        'record_id' => 'nullable',
        'ip_address' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
