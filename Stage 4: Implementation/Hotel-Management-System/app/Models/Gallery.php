<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = 'galleries';

    public $fillable = [
        'image'
    ];

    protected $casts = [
        'image' => 'string'
    ];

    public static array $rules = [
        'image' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
