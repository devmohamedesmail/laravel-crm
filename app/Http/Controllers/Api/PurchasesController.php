<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    // add_purchases
    public function add_purchases(Request $request){
        $purchases = new Purchase();
        $purchases->branch_id = $request->branch;
        $purchases->department_id = $request->department;
        $purchases->department_id = $request->department;
        $purchases->title = $request->title;
        $purchases->quantity = $request->quantity;
        $purchases->date = $request->date;
        $purchases->price = $request->price;
        $purchases->total = $request->quantity * $request->price;
        $purchases->save();
        return response()->json(["date"=>$purchases,'message'=>"purchases Added Successfully"],201);
    }

    // show_purchases
    public function show_purchases(){
        $purchases = Purchase::with(['branch', 'department'])->get();
        return response()->json(["data"=>$purchases,'message'=>"purchases fetched Successfully"],200);
    }


    public function update_purchases(Request $request,$id){
        $purchases = Purchase::findOrFail($id);
        $purchases->branch_id = $request->branch;
        $purchases->department_id = $request->department;
        $purchases->department_id = $request->department;
        $purchases->title = $request->title;
        $purchases->quantity = $request->quantity;
        $purchases->date = $request->date;
        $purchases->price = $request->price;
        $purchases->total = $request->quantity * $request->price;
        $purchases->save();
        return response()->json(["date"=>$purchases,'message'=>"purchases updated Successfully"],201);
       
    }
    public function delete_purchases($id){
        $purchases = Purchase::findOrFail($id);
        $purchases->delete();
        return response()->json(['message'=>"purchases deleted Successfully"],201);
       
    }
}
