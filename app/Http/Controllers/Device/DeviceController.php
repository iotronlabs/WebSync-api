<?php

namespace App\Http\Controllers\Device;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Events\StatusUpdate;
use App\Http\Resources\DeviceResource;
use App\Http\Resources\DeviceIndexResource;

class DeviceController extends Controller

{
    public $device;
    public function index()
    {
        $devices = Device::get();
        
        return DeviceResource::collection($devices);

    }

    public function show(Device $device)
    {
        return new DeviceResource($device);
    }

    public function update(Request $request)
    {
       
        $device = Device::findOrFail($request->id);
       $device->device_status = $request->status;
       
    $device->save();
    event(new StatusUpdate($device));
    return response()->json(['success'=>'Status change successfully.']);
    

    }
}
