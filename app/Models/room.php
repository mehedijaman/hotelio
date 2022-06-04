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
        'hotel_id',
        'roomNo',
        'floor',
        'type',
        'geyser',
        'ac',
        'balcony',
        'bathtub',
        'hiComode',
        'locker',
        'freeze',
        'internet',
        'interCom',
        'tv',
        'wardrobe',
        'price',
        'status',
        
    ];
}
