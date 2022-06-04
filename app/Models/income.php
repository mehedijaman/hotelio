<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    use HasFactory;

    protected $table ='income';
    protected $fillable = [
        'id',
        'category_id',
        'amount',
        'description',
        'date',
    ];
}
