<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $table ='room';
    protected $fillable = [
        'id',
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
