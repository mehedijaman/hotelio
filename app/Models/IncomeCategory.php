<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class IncomeCategory extends Model
{
    use HasFactory , SoftDeletes ;

    protected $table ='income_categories';
    protected $fillable = [
        'Name',
    ];
}
