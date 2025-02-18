<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public $table = 'features';

    public $fillable = [
        'hotel',
        'days_in_waiting_list',
        'agent_involved',
        'reserved_is_assigned',
        'has_special_requests',
        'customer_type',
        'deposit_type',
        'is_repeated_guest',
        'distribution_channel',
        'market_segment'
    ];

    protected $casts = [
        'hotel' => 'string',
        'days_in_waiting_list' => 'string',
        'agent_involved' => 'string',
        'reserved_is_assigned' => 'string',
        'has_special_requests' => 'string',
        'customer_type' => 'string',
        'deposit_type' => 'string',
        'is_repeated_guest' => 'string',
        'distribution_channel' => 'string',
        'market_segment' => 'string'
    ];

    public static array $rules = [
        'hotel' => 'nullable|string|max:255',
        'days_in_waiting_list' => 'nullable|string|max:255',
        'agent_involved' => 'nullable|string|max:255',
        'reserved_is_assigned' => 'nullable|string|max:255',
        'has_special_requests' => 'nullable|string|max:255',
        'customer_type' => 'nullable|string|max:255',
        'deposit_type' => 'nullable|string|max:255',
        'is_repeated_guest' => 'nullable|string|max:255',
        'distribution_channel' => 'nullable|string|max:255',
        'market_segment' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
