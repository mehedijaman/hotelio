<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;

    protected $table ='bank';
    protected $fillable = [
        'id',
        'name',
        'branch',
        'account_no',
        'address',
        'phone',
        'email',

    ];
}
