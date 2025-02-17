<?php

namespace App\Http\Controllers\webController;

use App\Models\Staff;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Staff_controller extends Controller
{
    //show_staff_page
    public function show_staff_page()
    {

        try {
            $staff = Staff::all();
            return view("admin.staff.index", compact('staff'));
        } catch (\Throwable $th) {

            return view('404', compact('th'));
        }
    }



    // add_staff_page
    public function add_staff_page()
    {

        try {
            $departments = Department::all();
            return view("admin.staff.add_staff", compact('departments'));
        } catch (\Throwable $th) {
            return view('404', compact('th'));
        }
    }



    // add_staff
    public function add_staff(Request $request)
    {
        try {
            $staff = new Staff();
            $staff->department_id = $request->department;
            $staff->name = $request->name;
            $staff->salary = $request->salary;
            $staff->discount = $request->discount;
            $staff->advance = $request->advance;
            $staff->comments = $request->comments;
            $staff->save();
            return redirect()->back()->with('success', __('translate.added'));
        } catch (\Throwable $th) {
            return view('404', compact('th'));
        }
    }



    public function delete_staff($id)
    {

        try {
            $staff = Staff::findOrFail($id);
            $staff->delete();
            return redirect()->back()->with('success', __('translate.deleted'));
        } catch (\Throwable $th) {
            return view('404', compact('th'));
        }
    }


    // edit_staff
    public function edit_staff($id)
    {
        try {
            $staff = Staff::findOrFail($id);
            $departments = Department::all();
            return view("admin.staff.edit", compact('staff', 'departments'));
        } catch (\Throwable $th) {
            return view('404', compact('th'));
        }
    }

    public function edit_staff_confirm($id, Request $request)
    {
        try {
            $staff = Staff::findOrFail($id);
            $staff->department_id = $request->department;
            $staff->name = $request->name;
            $staff->salary = $request->salary;
            $staff->discount = $request->discount;
            $staff->advance = $request->advance;
            $staff->comments = $request->comments;
            $staff->save();
            return redirect()->back()->with('success', __('translate.updated'));
        } catch (\Throwable $th) {
            return view('404', compact('th'));
        }
    }






    // reset_staff_data
    public function reset_staff_data(){
        $staff = Staff::all();
        foreach ($staff as $staffMember) {
            $staffMember->update([
                'advance' => null,
                'discount' => null,
                'netsalary' => null,
                'comments' => null,
            ]);
        }
        return redirect()->back()->with('success', __('translate.updated'));
        
    }





}
