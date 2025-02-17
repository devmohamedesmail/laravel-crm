<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PaidMethod;
use Illuminate\Http\Request;

class PaidMethodController extends Controller
{
    // add_method_type
    public function add_method_type(Request $request){
        $method = new PaidMethod();
        $method->method = $request->method;
        $method->save();
        return response()->json(['data'=>$method,'message'=>'paid method created successfully'],201);
    }

    // show_method_type
    public function show_method_type(){
        $methods = PaidMethod::all();
        return response()->json(['data'=>$methods,'message'=>'paid method fetched successfully'],200);
    }

    //update_method_type
    public function update_method_type(Request $request,$id){
        $method= PaidMethod::findOrFail($id);
        $method->method = $request->method;
        $method->save();
        return response()->json(['data'=>$method,'message'=>'paid method updated successfully'],201);
    }

    //delete_method_type
    public function delete_method_type($id){
        $method= PaidMethod::findOrFail($id);
        $method->delete();
        return response()->json(['message'=>'paid method deleted successfully'],201);
    }
}
