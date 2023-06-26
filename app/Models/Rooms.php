<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'area' ,
      'guests',
        'price',
        'quantity',
        'category',
        'image'
    ];
}
