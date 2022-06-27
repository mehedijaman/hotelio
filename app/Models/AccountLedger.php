<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountLedger extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'account_ledgers';
    protected $fillable = [
        'Debit',
        'Credit',
        'Date',
        'Method',
        'Description',
    ];
}
