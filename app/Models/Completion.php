<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Completion extends Model
{
    use HasFactory;
    protected $table = 'completions';

    protected $fillable = [
       'userID','moduleID','score','maxScore','status'
    ];
}