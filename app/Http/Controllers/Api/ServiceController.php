<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // add service
    public function add_service(Request $request){
        $service = new Service();
        $service->branch_id = $request->branch;
        $service->name = $request->name;
        $image=$request->image;
        if($image){
            $imageName = time(). '' . $image->getClientOriginalExtension();
            $image->move('uploads/service',$imageName);
            $service->image = $imageName;
        };
        $service->save();
        return response()->json(['data'=>$service,"message"=>"Service Added Successfully"],201);



    }
    // update service
    public function update_service(Request $request,$id){
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $image=$request->image;
        if($image){
            $imageName = time(). '' . $image->getClientOriginalExtension();
            $image->move('uploads/service',$imageName);
            $service->image = $imageName;
        };
        $service->save();
        return response()->json(['data'=>$service,"message"=>"Service updated Successfully"],201);

    }
    // delete service
    public function delete_service($id){
        $service = Service::findOrFail($id);
        $service->delete();
        return response()->json(['data'=>$service,"message"=>"Service deleted Successfully"],201);

    }
    public function show_services(){
        $services = Service::with('branch')->get();
        return response()->json(['data'=>$services,"message"=>"Service deleted Successfully"],201);
    }
}
