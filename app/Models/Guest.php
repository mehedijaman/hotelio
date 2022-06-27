<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use HasFactory , SoftDeletes;

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
