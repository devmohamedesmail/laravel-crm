<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceWorker;

class ServiceWorkerController extends Controller
{
    // add_service_worker
    public function add_service_worker(Request $request,$id){
        $service = Service::findOrFail($id);
        $worker= new ServiceWorker();
        $worker->service_id = $service->id;
        $worker->service_name = $service->name;
        $worker->name = $request->name;
        $worker->save();
        return response(["data"=>$worker,"message"=>"worker Added successfully"],201);
    }
    
    // show_service_workers
    public function show_service_workers($id){
         $workers = Service::with('workers')->findOrFail($id);
         return response(["data"=>$workers,"message"=>"workers fetched successfully"],201);
    }
    // add_service_worker
    public function update_service_worker(Request $request,$service,$id){
        $service = Service::findOrFail($service);
        $worker= ServiceWorker::findOrFail($id);
        $worker->service_id = $service->id;
        $worker->service_name = $service->name;
        $worker->name = $request->name;
        $worker->save();
        return response(["data"=>$worker,"message"=>"worker Added successfully"],201);
    }
    // delete_service_worker
    public function delete_service_worker($id){
        $worker= ServiceWorker::findOrFail($id);
        $worker->delete();
        return response(["message"=>"worker Deleted successfully"],201);
    }
    public function show_service_worker(){
        $workers= ServiceWorker::all();
        return response(["data"=>$workers,"message"=>"worker fetched successfully"],201);
    }
}
