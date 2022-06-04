<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table ='employee';
    protected $fillable = [
        'id',
        'hotel_id',
        'name',
        'dob',
        'nidNO',
        'nidDoc',
        'phone',
        'email',
    ];
}
