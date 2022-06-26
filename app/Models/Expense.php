<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use HasFactory , SoftDeletes;

    protected $table ='expenses';
    protected $fillable = [
        'CategoryID',
        'Amount',
        'Description',
        'Date',
    ];
}
