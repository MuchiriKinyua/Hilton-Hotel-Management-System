<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table = 'suppliers';

    public $fillable = [
        'full_name',
        'contact_person',
        'phone_number',
        'email',
        'category'
    ];

    protected $casts = [
        'full_name' => 'string',
        'contact_person' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'category' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'contact_person' => 'nullable|string|max:100',
        'phone_number' => 'nullable|string|max:50',
        'email' => 'nullable|string|max:50',
        'category' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
