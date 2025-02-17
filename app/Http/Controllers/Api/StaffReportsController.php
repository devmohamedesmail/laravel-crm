<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StaffReport;
use Illuminate\Http\Request;


class StaffReportsController extends Controller
{
    // add report
    public function add_report(Request $request){
        $report = new StaffReport();
        $report->staff_id = $request->staff;
        $report->report = $request->report;
        $report->date = $request->date;
        $report->save();
        return response()->json(['data'=>$report,'message'=>"Report Added Successfully"],201);
    }
    public function update_report(Request $request,$id){
        $report =  StaffReport::findOrFail($id);
        $report->staff_id = $request->staff;
        $report->report = $request->report;
        $report->date = $request->date;
        $report->save();
        return response()->json(['data'=>$report,'message'=>"Report updated Successfully"],201);
    }
    public function delete_report($id){
        $report =  StaffReport::findOrFail($id);
        $report->delete();
        return response()->json(['data'=>$report,'message'=>"Report deleted Successfully"],201);
    }
    public function show_reports(){
        $reports =  StaffReport::with('staff')->get();
        return response()->json(['data'=>$reports,'message'=>"Report fetched Successfully"],201);
    }
}
