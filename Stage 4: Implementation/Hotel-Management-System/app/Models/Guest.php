<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public $table = 'guests';

    public $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'id_proof'
    ];

    protected $casts = [
        'full_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'id_proof' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:50',
        'phone' => 'nullable|string|max:50',
        'address' => 'nullable|string|max:100',
        'id_proof' => 'nullable|string|max:50',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function feedback(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Feedback::class, 'guest_id');
    }

    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Order::class, 'guest_id');
    }

    public function payments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Payment::class, 'guest_id');
    }
}
