<?php

namespace App\Http\Controllers\Api;

use App\Models\Invoice;
use App\Models\Problem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceProblemsController extends Controller
{
    // add_problem
    public function add_problem($id,Request $request){
        $invoice = Invoice::findOrFail($id);
        $problem = new Problem();
        $problem->invoice_id = $invoice->id;
        $problem->step = $request->step;
        $problem->problem = $request->problem;
        $problem->reason = $request->reason;
        $problem->solution = $request->solution;
        $problem->worker = $request->worker;
        $problem->sales = $request->sales;
        $problem->carNo = $invoice->carNo;
        $problem->save();
        return response()->json(["data"=>$problem,"message"=>"Problem Added"],201);
    }

    public function show_problems(){
        $problems=Problem::with('invoice')->get();
        return response()->json(["data"=>$problems,"message"=>"problems"],201);
    }

    // update_problem 
    public function update_problem($id,Request $request){
        $problem = Problem::findOrFail($id);
        $problem->step = $request->step;
        $problem->problem = $request->problem;
        $problem->reason = $request->reason;
        $problem->solution = $request->solution;
        $problem->save();
        return response()->json(["data"=>$problem,"message"=>"Problem Updated"],201);
    }
    // delete_problem
    public function delete_problem($id){
        $problem = Problem::findOrFail($id);
        $problem->delete();
        return response()->json(["data"=>$problem,"message"=>"Problem Deleted"],201);
    }
}
