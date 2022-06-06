<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $table ='guests';
    protected $fillable = [
        'Name',
        'Email',
        'Address',
        'Phone',
        'NIDNo',
        'NID',
        'PassportNo',
        'Passport',
        'Father',
        'Mother',
        'Spouse',
        'Photo',        
    ];
}
