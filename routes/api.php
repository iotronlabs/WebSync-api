<?php

use App\Models\Rooms;
use App\Models\Switches;

Route::resource('rooms','Room\RoomController');
Route::resource('devices','Device\DeviceController');
Route::put ('devices/update','Device\DeviceController@update');