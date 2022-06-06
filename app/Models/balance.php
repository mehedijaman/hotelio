<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balance extends Model
{
    use HasFactory;

    protected $table ='balance';
    protected $fillable = [
        'id',
        'Date',
        'OpeningBalance',
        'ClosingBalance',
        'status',

    ];
}
