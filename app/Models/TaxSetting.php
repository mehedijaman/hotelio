<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxSetting extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='tax_settings';
    protected $fillable = [
        'Name',
        'Parcent',
        'Status',
    ];
}
