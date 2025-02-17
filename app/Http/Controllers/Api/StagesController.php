<?php

namespace App\Http\Controllers\Api;

use App\Models\Staff;
use App\Models\Stage;
use App\Models\Cartask;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StagesController extends Controller
{
    // add_stage
    public function add_stage($id, Request $request)
    {
        // add new stage
        $invoice = Invoice::findOrFail($id);
        $stage = new Stage();

        
         // Retrieve staff names from IDs
        $staffIds = $request->worker;
        $staffNames = Staff::whereIn('id', $staffIds)->pluck('name', 'id')->toArray();

       // Map IDs to names
       $workerNames = array_map(function ($id) use ($staffNames) {
        return $staffNames[$id];
       }, $staffIds);


        $stage->invoice_id = $invoice->id;
        $stage->name = $request->name;
        $stage->worker = $workerNames;
        $stage->start = $request->start;
        $stage->end = $request->end;
        $stage->carNo = $invoice->carNo;
        $stage->carType = $invoice->carType;
        $stage->save();

        # add new task
        $cartask = new Cartask();
        $cartask->name = $request->name;
        $cartask->worker = $workerNames;
        $cartask->start = $request->start;
        $cartask->end = $request->end;
        $cartask->carNo = $invoice->carNo;
        $cartask->carType = $invoice->carType;
        $cartask->save();


        // Associate the task with staff members
        $staffIds = $request->worker;
        foreach ($staffIds as $staffId) {
            $staff = Staff::findOrFail($staffId);
            $staff->tasks()->attach($cartask->id);
        }
        return response()->json(["data" => $stage, "message" => "stage Added"], 201);
    }

    public function show_stages()
    {
        $stages = Invoice::with('stages')->get();
        return response()->json(["data" => $stages, "message" => "stages"], 201);
    }
    
    public function show_job_cards(){
        $stages = Stage::all();
        return response()->json(["data" => $stages, "message" => "stages"], 201);
    }

    public function update_stage_status($id)
    {
        $stage = Stage::findOrFail($id);
        $stage->status = $stage->status == 1 ? 0 : 1;
        $stage->save();
        return response()->json(["data" => $stage, "message" => "updated"], 201);
    }
    
    
    public function delete_stage($id){
        $stage = Stage::findOrFail($id);
        $stage->delete();
        return response()->json(["data" => $stage, "message" => "Deleted"], 201);
    }
    
    
    
    
    
    
    
    
    
    
    
    
}
