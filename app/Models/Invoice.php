<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'invoices';
    protected $fillable = [
        'GuestID',
        'TaxID',
        'PaymentMethod',
        'Date',
        'SubTotal',
        'TaxTotal',
        'Total',
    ];
}
