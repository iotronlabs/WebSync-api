<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     public function getrooms()
    {
        return $this->hasMany(Room::class, 'room_id');
    }
}
