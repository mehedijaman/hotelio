<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank_ledger extends Model
{
    use HasFactory;

    protected $table ='bank_ledger';
    protected $fillable = [
        'id',
        'account_no',
        'deposit',
        'withdraw',
        'date',
        'description',
    ];
}
