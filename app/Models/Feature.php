<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function delete()
    {
        // Perform any additional deletion logic here
        // For example, you might need to delete related records or perform any other necessary cleanup

        return parent::delete();
    }

    public function rooms()
    {
        return $this->belongsToMany(Rooms::class, 'room_features', 'feature_id', 'rooms_id');
    }


}
