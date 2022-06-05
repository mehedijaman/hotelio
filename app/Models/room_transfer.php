<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_transfer extends Model
{
    use HasFactory;

    protected $table ='room_transfer';
    protected $fillable = [
        'id',
        'GuestId',
        'FormRoomId',
        'ToRoomId',
        'Date',
    ];
}
