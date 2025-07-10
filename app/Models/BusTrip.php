<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusTrip extends Model
{
    protected $table = 'bus_trips';
    
    protected $fillable = [
        'trip_name',
        'date',
        'total_passengers',
        'total_fare',
        'fuel_cost',
        'assistant_cost',
        'other_expenses',
        'net_profit',
    ];

    protected $casts = [
        'date' => 'date',
        'total_passengers' => 'integer',
        'total_fare' => 'decimal:2',
        'fuel_cost' => 'decimal:2',
        'assistant_cost' => 'decimal:2',
        'other_expenses' => 'decimal:2',
        'net_profit' => 'decimal:2',
    ];
} 