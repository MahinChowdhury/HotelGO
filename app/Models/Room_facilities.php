<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_facilities extends Model
{
    use HasFactory;
    protected $fillable = ['room_id', 'facilities_id'];
}
