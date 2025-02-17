<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    // add_role
    public function add_role(Request $request){
        $role = new UserRole();
        $role->role = $request->role;
        $role->save();
        return response()->json(["data"=>$role,"message"=>"Role Added Successfully"],201);
    }

    // add_role
    public function show_roles(){
        $roles =  UserRole::all();
        return response()->json(["data"=>$roles,"message"=>"Role Added Successfully"],201);
    }

    // delete_role
    public function delete_role($id){
        $role =  UserRole::findOrFail($id);
        $role->delete();
        return response()->json(["message"=>"Role Added Successfully"],201);
    }
}
