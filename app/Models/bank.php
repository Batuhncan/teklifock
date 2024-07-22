<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;

    protected $table = 'banks';

    protected $fillable = [
        'id',
        'bank_name',
        'iban',
        'account_name',
        'account_number',
        'swift_code',
        'branch_code',
        'status',
        'created_at',
        'updated_at',
    ];
}
