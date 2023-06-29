<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_name','room_name','amount','booking_name','checkin','checkout','days','phone','user_id'];

    public function delete()
    {
        // Perform any additional deletion logic here
        // For example, you might need to delete related records or perform any other necessary cleanup

        return parent::delete();
    }
}
