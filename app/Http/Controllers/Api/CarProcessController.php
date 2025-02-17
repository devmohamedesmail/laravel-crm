<?php

namespace App\Http\Controllers\Api;

use App\Models\Process;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarProcessController extends Controller
{
    // add_new_process
    public function add_new_process(Request $request){
        $process = new Process();
        $process->process = $request->process;
        $process->save();
        return response()->json(['message' => 'Car process added successfully', 'data' => $process]);
    }

    // fetch car process
    public function show_car_process(){
        $process =  Process::all();
        return response()->json(['message' => 'Car process fetched successfully', 'data' => $process]);
    }
}
