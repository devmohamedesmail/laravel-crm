<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // add_department
    public function add_department(Request $request){
        $department = new Department();
        $department->branch_id = $request->branch;
        $department->name = $request->name;
        $department->save();
        return response()->json(['data'=>$department,'message'=>'Department created successfully'],201);
    }

    // show_departments 
    public function show_departments(){
        $departments = Department::all();
        return response()->json(['data'=>$departments,'message'=>'Departments fetched successfully'],200);
    }

    // update_department
    public function update_department(Request $request,$id){
        $department = Department::findOrFail($id);
        $department->branch_id = $request->branch;
        $department->name = $request->name;
        $department->save();
        return response()->json(['data'=>$department,'message'=>'Departments updated successfully'],201);
    }

    // delete_department
    public function delete_department($id){
        $department = Department::findOrFail($id);
        $department->delete();
        return response()->json(['message'=>'Departments deleted successfully'],201);
    }
}
