<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTransfer extends Model
{
    use HasFactory;

    protected $table ='room_transfers';
    protected $fillable = [
        'GuestID',
        'FromRoomID',
        'ToRoomID',
        'Date',
    ];
}
