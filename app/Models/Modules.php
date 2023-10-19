<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;
    protected $table = 'onlinemodules';

    protected $fillable = [
        'moduleID',
        'OMName',
        'OMPageName',
        'OMImage',
        'OMFee',
        'OMDescription',
        'OMDuration',
        'availability',
        'active',
        'isRise',
        'learningObjectives',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
