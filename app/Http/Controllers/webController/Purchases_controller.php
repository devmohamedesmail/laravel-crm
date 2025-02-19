<?php

namespace App\Http\Controllers\webController;

use App\Models\Purchase;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Purchases_controller extends Controller
{
    //show_purchases_page
    public function show_purchases_page(){
        try {
            $data = Purchase::with("branch","department")->orderBy("id","desc")->get();
            return view("admin.purchase.index",compact("data"));
          
            //return response()->json($data);
        } catch (\Throwable $th) {
            return view("404",compact("th"));
        }
    }





    public function add_purchases_page(){
        try {
            $departments = Department::all();
            return view("admin.purchase.add",compact("departments"));
        } catch (\Throwable $th) {
            return view("404",compact("th"));
        }
    }



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
        return redirect()->back()->with("success",__('translate.added'));
    }





}
