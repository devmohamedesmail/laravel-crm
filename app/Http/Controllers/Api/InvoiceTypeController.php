<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InvoiceType;
use Illuminate\Http\Request;

class InvoiceTypeController extends Controller
{
    // add_invoice_type
    public function add_invoice_type(Request $request){
        $invoicetype = new InvoiceType();
        $invoicetype->type = $request->type;
        $invoicetype->save();
        return response()->json(['data'=> $invoicetype,'message'=>'invoice type created successfully'],201);
    }

    // show_invoices_type
    public function show_invoices_type(){
        $invoicestype = InvoiceType::all();
        return response()->json(['data'=> $invoicestype,'message'=>'invoice type fetched successfully'],201);
    }
    // update_invoice_type
    public function update_invoice_type(Request $request,$id){
        $invoicetype = InvoiceType::findOrFail($id);
        $invoicetype->type = $request->type;
        $invoicetype->save();
        return response()->json(['data'=> $invoicetype,'message'=>'invoice type updated successfully'],201);
    }

    // delete_invoice_type
    public function delete_invoice_type($id){
        $invoicetype = InvoiceType::findOrFail($id);
        $invoicetype->delete();
        return response()->json(['message'=>'invoice type deleted successfully'],200);
    }
}
