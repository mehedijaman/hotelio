<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_item extends Model
{
    use HasFactory;

    protected $table ='invoice_item';
    protected $fillable = [
        'id',
        'invoce_id',
        'name',
        'description',
        'qty',
        'unitPricer',
        'price',
    ];
}
