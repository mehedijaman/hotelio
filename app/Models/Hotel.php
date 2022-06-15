<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

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
