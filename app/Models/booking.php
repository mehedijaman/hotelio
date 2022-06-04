<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $table ='booking';
    protected $fillable = [
        'id',
        'room_id',
        'guset_id',
        'checkInDate',
        'checkOutDate',
    ];
}
