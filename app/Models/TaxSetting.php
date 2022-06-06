<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxSetting extends Model
{
    use HasFactory;
    protected $table ='tax_settings';
    protected $fillable = [
        'id',
        'Name',
        'Parcent',
        'Status',
    ];
}
