<?php

namespace App\Http\Controllers\Api;

use Log;
use App\Models\Branch;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Imports\InvoicesImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    // add new invoice
    public function add_new_invoice(Request $request){
        $invoice= new Invoice();
        $branch = Branch::findOrFail($request->branch);

        $invoice->branch_id = $request->branch;
        $invoice->branchName = $branch->name ;
        $invoice->invoiceType = $request->invoiceType;
        $invoice->name = $request->name;
        $invoice->phone = $request->phone;
        $invoice->address = $request->address;
        $invoice->carNo = $request->carNo;
        $invoice->carType = $request->carType;
        $invoice->carService = $request->carService;
        $invoice->price = $request->price;
        $invoice->description = $request->description;
        $invoice->note = $request->note;
        $invoice->Ddate = $request->Ddate;
        $invoice->Rdate = $request->Rdate;
        $invoice->paidMethod = $request->paidMethod;
        $invoice->percent = $request->percent;
        $invoice->sales = $request->sales;
        $invoice->trn_no = $request->trn_no;
        $invoice->save();
        return response()->json([
            'data'=>$invoice,
            'message'=>'Invoice created successfully',
        ],201);
        
    }

    // show_invoices
    public function show_invoices(){
        $invoices = Invoice::with('branch')->get();
        return response()->json([
            'data'=>$invoices,
            'message'=>'Invoices fetched successfully',
        ],200);
    }
    
    // show_invoice
    public function show_invoice($id){
        $invoice = Invoice::with(['branch', 'stages', 'problems'])->findOrFail($id);
        return response()->json([
            'data'=>$invoice,
            'message'=>'Invoice fetched successfully',
        ],200);
    }
    
    public function show_invoices_details(){
        $invoices = Invoice::with(['branch', 'stages', 'problems'])->where('carStatus','0')->get();
        return response()->json(['data'=>$invoices,'message'=>'Invoices fetched successfully',],200);
    }

    // update_invoice
    public function update_invoice(Request $request,$id){
        $invoice = Invoice::findOrFail($id);
        $invoice->branch_id = $request->branch;
        $invoice->invoiceType = $request->invoiceType;
        $invoice->name = $request->name;
        $invoice->phone = $request->phone;
        $invoice->address = $request->address;
        $invoice->carNo = $request->carNo;
        $invoice->carType = $request->carType;
        $invoice->carService = $request->carService;
        $invoice->price = $request->price;
        $invoice->description = $request->description;
        $invoice->note = $request->note;
        $invoice->Ddate = $request->Ddate;
        $invoice->Rdate = $request->Rdate;
        $invoice->paidMethod = $request->paidMethod;
        if($request->sales !== null){
            $invoice->sales = $request->sales;
        }
        $invoice->trn_no = $request->trn_no;
        
        $invoice->save();
        return response()->json([
            'data'=>$invoice,
            'message'=>'Invoice updated successfully',
        ],201);
    }
    //delete_invoice
    public function delete_invoice($id){
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();
        return response()->json([
            'message'=>'Invoice Deleted successfully',
        ],200);
    }




    public function import(Request $request)
    {
       $file = $request->file('file');
       Excel::import(new InvoicesImport, $file);
       return response()->json(['data'=>request()->file('file'),'message' => 'Import successful'], 200);
  
    }

    // update_invoice_status
    public function update_invoice_status($id,Request $request){
        $invoice = Invoice::findOrFail($id);
        $invoice->carStatus = "1";
        $invoice->save();
        return response()->json([
            'data'=>$invoice,
            'message'=>'Invoice status updated successfully',
        ],201);
    }
}
