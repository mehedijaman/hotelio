<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
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
