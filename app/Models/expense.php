<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    use HasFactory;

    protected $table ='expense';
    protected $fillable = [
        'id',
        'CategoryId',
        'Amount',
        'Description',
        'Date',
    ];
}
