<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    protected $fillable = [
        'id',
        'Date',
        'SubTotal',
        'TaxTotal',
        'Total',
        'PaymentMethod',
        'GuestId',
        'TexId',
    ];
}
