<?php

namespace App\Http\Controllers\webController;

use App\Http\Controllers\Controller;
use App\Models\Check;
use Illuminate\Http\Request;

class Checks_controller extends Controller
{
    //show_checks_page
    public function show_checks_page(){
        try {
            $checks = Check::with('branch')->orderBy('date', 'asc')->get();
            return view("admin.checks.index",compact('checks'));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }

    // add_check_page
    public function add_check_page(){
        return view("admin.checks.add");
    }


    public function add_check(Request $request){
        try {
            $check = new Check();
            $check->branch_id = $request->branch;
            $check->issuer = $request->issuer;
            $check->amount = $request->amount;
            $check->statement = $request->statement;
            $check->date = $request->date;
            $check->credit = $request->credit;
            $check->number = $request->number;
            $check->save();
            return redirect()->back()->with('success', __('translate.added'));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }



    public function delete_check($id){
        try {
            $check = Check::findOrFail($id);
            $check->delete();
            return redirect()->back()->with('success', __('translate.deleted'));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }



    // edit_check
    public function edit_check($id){
        try {
            $check = Check::findOrFail($id);
            return view("admin.checks.edit",compact("check"));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }


    // edit_check_confirm
    public function edit_check_confirm(Request $request,$id){
        try {
            $check = Check::findOrFail($id);
            $check->branch_id = $request->branch;
            $check->issuer = $request->issuer;
            $check->amount = $request->amount;
            $check->statement = $request->statement;
            $check->date = $request->date;
            $check->credit = $request->credit;
            $check->number = $request->number;
            $check->save();
            return redirect()->back()->with('success', __('translate.updated'));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }




}
