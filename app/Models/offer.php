<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;

    protected $table = 'offers';
    
    protected $fillable = [
        'id',
        'sender',
        'receiver',
        'bank',
        'amount',
        'kdv',
        'total_amount',
        'status',
        'rate_type',
        'rate',
        'products',
        'created_at',
        'last_at',
    ];
}
