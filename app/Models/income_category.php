<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income_category extends Model
{
    use HasFactory;

    protected $table ='income_category';
    protected $fillable = [
        'id',
        'Name',
    ];
}
