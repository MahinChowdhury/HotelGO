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

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'room_features', 'rooms_id', 'feature_id');
    }

    public function facilities(){
        return $this->belongsToMany(Facility::class,'room_facilities','room_id','facilities_id');
    }

    public function delete()
    {
        // Perform any additional deletion logic here
        // For example, you might need to delete related records or perform any other necessary cleanup

        return parent::delete();
    }

}
