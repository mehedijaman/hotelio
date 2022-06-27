<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory,SoftDeletes;

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
