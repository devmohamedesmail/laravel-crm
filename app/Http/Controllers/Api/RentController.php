<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    // add rent
    public function add_rent(Request $request){
        $rent = new Rent();
        $rent->branch_id = $request->branch;
        $rent->bills = $request->bills;
        $rent->amount = $request->amount;
        $rent->month = $request->month;
        $rent->save();
        return response()->json(["data"=>$rent,"message"=>"rent Added successfully"],201);
    }
    // update rent
    public function update_rent(Request $request,$id){
        $rent =  Rent::findOrFail($id);
        $rent->branch_id = $request->branch;
        $rent->bills = $request->bills;
        $rent->amount = $request->amount;
        $rent->month = $request->month;
        $rent->save();
        return response()->json(["data"=>$rent,"message"=>"rent updated successfully"],201);
    }
    // update rent
    public function show_rent(){
        $rent =  Rent::with('branch')->get();
        return response()->json(["data"=>$rent,"message"=>"rent fetched successfully"],201);
    }

       // update rent
       public function delete_rent($id){
        $rent =  Rent::findOrFail($id);
        $rent->delete();
        return response()->json(["message"=>"rent delete successfully"],201);
    }
}
