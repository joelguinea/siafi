<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Axie extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'mouth', 'eyes', 'tail', 'ears', 'horns', 'back'];
   
}