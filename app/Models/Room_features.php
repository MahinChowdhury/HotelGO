<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_features extends Model
{
    use HasFactory;
    protected $fillable = ['room id', 'features_id'];
}
