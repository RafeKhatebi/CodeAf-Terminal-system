<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OilTransaction extends Model
{
    protected $table = 'oil_transactions';
    
    protected $fillable = [
        'type',
        'quantity_liters',
        'price_per_liter',
        'total_amount',
        'party_name',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
        'quantity_liters' => 'decimal:2',
        'price_per_liter' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];
} 