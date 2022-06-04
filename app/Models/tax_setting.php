<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tax_setting extends Model
{
    use HasFactory;
    protected $table ='tax_setting';
    protected $fillable = [
        'id',
        'name',
        'parcent',
        'status',
    ];
}
