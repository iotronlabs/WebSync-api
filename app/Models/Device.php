<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{public $timestamps=false;
    public function getRouteKeyName()
    {
        return 'device_slug';
    }
}
