<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ServiceWorker;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    // add_task
    public function add_task(Request $request,$id){
        $worker = ServiceWorker::findOrFail($id);
        $task = new Task();
        $task->service_workers_id = $worker->id;
        $task->name = $worker->name;
        $task->description = $request->description;
        $task->carNo = $request->carNo;
        $task->carType = $request->carType;
        $task->carColor = $request->carColor;
        $task->notes = $request->notes;
        $task->start = $request->start;
        $task->end = $request->end;
        $image = $request->image;
        if($image){
            $imageName = time(). '' . $image->getClientOriginalExtension();
            $image->move('uploads/tasks',$imageName);
            $task->image = $imageName;
        };
        $task->save();
        return response()->json(["data"=>$task,"message"=>"task Added"],201);
    }
    // add_task
    public function update_task(Request $request,$id){
        $task = Task::findOrFail($id);
        $task->description = $request->description;
        $task->carNo = $request->carNo;
        $task->carType = $request->carType;
        $task->carColor = $request->carColor;
        $task->notes = $request->notes;
        $task->start = $request->start;
        $task->end = $request->end;
        $image = $request->image;
        if($image){
            $imageName = time(). '' . $image->getClientOriginalExtension();
            $image->move('uploads/tasks',$imageName);
            $image->image = $imageName;
        };
        $task->save();
        return response()->json(["data"=>$task,"message"=>"task Added"],201);
    }
    // add_task
    public function delete_task($id){
       
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(["data"=>$task,"message"=>"task Deleted"],201);
    }
    // add_task
    public function show_tasks(){  
        $tasks = Task::all();
        return response()->json(["data"=>$tasks,"message"=>"task fetch"],201);
    }
    
    public function show_worker_tasks($id){
         $tasks = ServiceWorker::with(['tasks'])->findOrFail($id);
         return response()->json(["data"=>$tasks,"message"=>"task fetch"],201);
    }
    
    // change_task_status
    public function change_task_status($id){
        $task = Task::findOrFail($id);
        $task->status = $task->status == "1" ? "0" : "1";
        $task->save();
        return response()->json(["data"=>$task,"message"=>"task status updated"],201);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
