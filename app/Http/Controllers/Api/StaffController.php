<?php

namespace App\Http\Controllers\Api;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\StaffImport;
use Maatwebsite\Excel\Facades\Excel;

class StaffController extends Controller
{
    // add_new_staff
    public function add_new_staff(Request $request){
        $staff = new Staff();
        $staff->department_id = $request->department;
        $staff->name = $request->name;
        $staff->salary = $request->salary;
        $staff->discount = $request->discount;
        $staff->advance = $request->advance;
        $staff->comments = $request->comments;
        $staff->save();
        return response()->json(['data'=>$staff,'message'=>'staff added successfully'],201);
    }

    // show_staff
    public function show_staff(){
        $staff = Staff::with('department')->get();
        return response()->json(['data'=>$staff,'message'=>'staff fetched successfully'],200);

    }

    // update_staff
    public function update_staff(Request $request,$id){
        $staff = Staff::findOrFail($id); 
        $staff->department_id = $request->department;
        $staff->name = $request->name;
        $staff->salary = $request->salary;
        $staff->discount = $request->discount;
        $staff->advance = $request->advance;
        $staff->netsalary = $staff->salary - ($request->discount + $request->advance);
        $staff->comments = $request->comments;
        $staff->save();
        return response()->json(['data'=>$staff,'message'=>'staff updated successfully'],200);
    }

    // delete_staff
    public function delete_staff($id){
        $staff = Staff::findOrFail($id); 
        $staff->delete();
        return response()->json(['message'=>'staff deleted successfully'],200);
    }

    // import_staff
    public function import_staff(Request $request){
        $file = $request->file('file');
        Excel::import(new StaffImport, $file);
        return response()->json(["message"=>"Success"],201);
    }
    // reset table
    public function reset_staff_salaries(){
        Staff::query()->update(['discount' => null, 'advance' => null,'netsalary'=>null,'comments'=>null]);
        return response()->json(["message"=>"Table reset successfully"],201);
    }

    // show_staff_stasks
    public function show_staff_stasks(){
        $staffTasks = Staff::with('tasks')->get();
        return response()->json(['data' => $staffTasks,'message' => 'All staff with their cartasks retrieved successfully', ]);
    }
}
