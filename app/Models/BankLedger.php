<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankLedger extends Model
{
    use HasFactory;

    protected $table ='bank_ledgers';
    protected $fillable = [
        'BankID',
        'Deposit',
        'Withdraw',
        'Date',
        'Description',
    ];
}
