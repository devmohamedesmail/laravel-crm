<?php

namespace App\Http\Controllers\Api;

use App\Models\CarType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarTypeController extends Controller
{
    // add_car_type
    public function add_car_type(Request $request){
        $carType = new CarType();
        $carType->type = $request->type;
        $carType->save();
        return response()->json(['message' => 'Car type added successfully', 'data' => $carType]);
    }
    // show_car_types
    public function show_car_types(){
        $carTypes = CarType::all();
        return response()->json(['message' => 'Car types retrieved successfully', 'data' => $carTypes]);
    }
    // update_car_type
    public function update_car_type($id, Request $request){
        $carType = CarType::findOrFail($id);
        if(!$carType){
            return response()->json(['message' => 'Car type not found'], 404);
        }
        $carType->type = $request->type;
        $carType->save();
        return response()->json(['message' => 'Car type updated successfully', 'data' => $carType]);
    }

    // delete_car_type
    public function delete_car_type($id){
        $carType = CarType::findOrFail($id);
        if(!$carType){
            return response()->json(['message' => 'Car type not found'], 404);
        }
        $carType->delete();
        return response()->json(['message' => 'Car type deleted successfully']);
    }

}
