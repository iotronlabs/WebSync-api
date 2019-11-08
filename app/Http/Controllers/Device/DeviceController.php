<?php

namespace App\Http\Controllers\Device;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Http\Resources\DeviceResource;
use App\Http\Resources\DeviceIndexResource;

class DeviceController extends Controller

{
    
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
       $device->status = $request->status;
    $device->save();
    return response()->json(['success'=>'Status change successfully.']);

    }
}
