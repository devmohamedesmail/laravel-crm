<?php

namespace App\Http\Controllers\Api;

use App\Models\Check;
use Illuminate\Http\Request;
use App\Imports\ChecksImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ChecksController extends Controller
{
    // add chech
    public function add_check(Request $request){
        $check = new Check();
        $check->branch_id = $request->branch;
        $check->issuer = $request->issuer;
        $check->amount = $request->amount;
        $check->statement = $request->statement;
        $check->date = $request->date;
        $check->credit = $request->credit;
        $check->number = $request->number;
        $check->save();
        return response()->json(["data"=>$check,"message"=>"check added"],201);
    }
    public function show_check(){
        $check = Check::with('branch')->orderBy('date', 'asc')->get();
        return response()->json(["data"=>$check,"message"=>"check fetched"],201);
    }

    // update
    public function update_check(Request $request,$id){
        $check =  Check::findOrFail($id);
        $check->branch_id = $request->branch;
        $check->issuer = $request->issuer;
        $check->amount = $request->amount;
        $check->statement = $request->statement;
        $check->date = $request->date;
        $check->credit = $request->credit;
        $check->save();
        return response()->json(["data"=>$check,"message"=>"check updated"],201);
    }
    // delete
    public function delete_check($id){
        $check =  Check::findOrFail($id);
        $check->delete();
        return response()->json(["message"=>"check deleted"],201);
    }

    // import_checks
    public function import_checks(Request $request){
        $file = $request->file('file');
        Excel::import(new ChecksImport, $file);
        return response()->json(["message"=>"Success"],201);
    }
}
