<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $table ='rooms';
    protected $fillable = [
        'HotelID',
        'RoomNo',
        'Floor',
        'Type',
        'Geyser',
        'AC',
        'Balcony',
        'Bathtub',
        'HiComode',
        'Locker',
        'Freeze',
        'Internet',
        'InterCom',
        'TV',
        'Wardrobe',
        'Price',
        'AdditionalFeatures',
        'Status',        
    ];
}
