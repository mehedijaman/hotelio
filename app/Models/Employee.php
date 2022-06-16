<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table ='employees';
    protected $fillable = [
        'HotelID',
        'Name',
        'Designation',
        'DateOfBirth',
        'NIDNo',
        'NID',
        'Phone',
        'Email',
        'Address',
        'DateOfJoin',
        'Status',
    ];
}
