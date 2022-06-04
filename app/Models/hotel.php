<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $table ='hotel';
    protected $fillable = [
        'id',
        'name',
        'title',
        'email',
        'address',
        'phone',
        'regNo',
        'logo',
        'photo',
    ];
}
