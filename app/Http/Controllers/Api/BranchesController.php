<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    // add new branch
    public function add_new_branch(Request $request)
    {
        $branch = new Branch();
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->phone = $request->phone;
        $branch->save();
        return response()->json([
            'data' => $branch,
            'message' => 'Branch created successfully'
        ], 201);
    }

    public function show_branches(){
        $branches = Branch::with([ 'departments.staff','checks', 'invoices'])->get();
        return response()->json([
            'data' => $branches,
            'message' => 'Branches fetched successfully'
        ], 201);
    }
    // update branch
    public function update_branch($id, Request $request){
        $branch = Branch::findOrFail($id);
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->phone = $request->phone;
        $branch->save();
        return response()->json([
            'data' => $branch,
            'message' => 'Branch updated successfully'
        ], 200);

    }
    // delete branch
    public function delete_branch($id){
        $branch = Branch::findOrFail($id);
        $branch->delete();
        return response()->json([
            'message' => 'Branch delete successfully'
        ], 200);
    }
}
