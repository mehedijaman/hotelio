<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomTransfer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='room_transfers';
    protected $fillable = [
        'GuestID',
        'FromRoomID',
        'ToRoomID',
        'Date',
    ];
}
