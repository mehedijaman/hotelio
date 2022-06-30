<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankLedger extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bank_ledgers';
    protected $fillable = [
        'BankID',
        'Deposit',
        'Withdraw',
        'Date',
        'Description',
    ];
}
