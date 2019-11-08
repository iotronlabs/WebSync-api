<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Http\Resources\RoomResource;

class RoomController extends Controller
{
    public function index()
    {
        return RoomResource::collection(
            Room::get()
        );
    }
}
