<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Problem;

class StatisticsController extends Controller
{
    public function invoices_count()
    {
        $data = DB::table('branches')
            ->leftJoin('invoices', 'branches.id', '=', 'invoices.branch_id')
            ->select('branches.name as branch_name', DB::raw('COUNT(invoices.id) as invoice_count'))
            ->groupBy('branches.id', 'branches.name')
            ->get();

        return response()->json($data);
    }

    public function getSalesPerBranch()
    {
        $data = DB::table('invoices')
            ->select('sales as name', DB::raw('COUNT(*) as count'))
            ->groupBy('sales')
            ->get();

        return response()->json($data);
    }
    
    
     public function addressـstatistics()
    {
        $data = DB::table('invoices')
            ->select('address as name', DB::raw('COUNT(*) as count'))
            ->groupBy('address')
            ->get();

        return response()->json($data);
    }
   
    
      public function problemsـstatistics()
    {
         $data = DB::table('problems')
            ->select('worker as name', DB::raw('COUNT(*) as count'))
            ->groupBy('worker')
            ->get();

        return response()->json($data);
    }
    
    public function tasks_per_worker_statistics()
    {
     // Fetch all stages with the worker JSON data
    $stages = DB::table('stages')->pluck('worker');

    // Initialize an array to hold counts
    $workerCounts = [];

    // Process each worker array
    foreach ($stages as $workerJson) {
        $workers = json_decode($workerJson, true); // Decode JSON to an array
        foreach ($workers as $worker) {
            if (isset($workerCounts[$worker])) {
                $workerCounts[$worker]++;
            } else {
                $workerCounts[$worker] = 1;
            }
        }
    }

    // Convert to an array of objects for the response
    $result = [];
    foreach ($workerCounts as $name => $count) {
        $result[] = ['name' => $name, 'count' => $count];
    }

    return response()->json($result);
   }
    
    
    
    
    
}
