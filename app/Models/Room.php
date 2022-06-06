<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table ='rooms';
    protected $fillable = [
        'HotelId',
        'RoomNo',
        'Floor',
        'Type',
        'Geyser',
        'Ac',
        'Balcony',
        'Bathtub',
        'HiComode',
        'Locker',
        'Freeze',
        'Internet',
        'InterCom',
        'Tv',
        'Wardrobe',
        'Price',
        'AdditionalFeatures',
        'Status',
        
    ];
}
