<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userQuery extends Model
{
    use HasFactory;

    protected $table = 'user_queries';
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
