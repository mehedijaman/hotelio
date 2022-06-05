<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account_ledger extends Model
{
    use HasFactory;

    protected $table ='account_ledger';
    protected $fillable = [
        'id',
        'Debit',
        'Credit',
        'Date',
        'Method',
        'Description',

    ];
    
}
