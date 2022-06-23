<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use HasFactory,SoftDeletes;

    protected $table ='hotels';
    protected $fillable = [
        'Name',
        'Title',
        'Email',
        'Address',
        'Phone',
        'RegNo',
        'Logo',
        'Photo',
    ];
}
