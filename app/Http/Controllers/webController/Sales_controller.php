<?php

namespace App\Http\Controllers\webController;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Sales_controller extends Controller
{
    // show_sales_details 
    public function show_sales_details(){
       
        try {
            if(Auth()->check()){
                $sales = Auth()->User()->name;
                $invoices = Invoice::where('sales',$sales)->get();
                return view('admin.sales.index',compact('invoices',"sales"));
            }else{
                return view('auth.login');
            }
        } catch (\Throwable $th) {
            return view('404',compact('th'));
        }
    }




    public function filter_sales_invoices($sales,Request $request){

        $start = $request->start;
        $end = $request->end;
        $type = $request->invoicetype;
        $paidMethod = $request->paidMethod;
        $invoices = Invoice::where("sales", $sales)
        ->where("invoiceType", $type)
        ->where("paidMethod", $paidMethod)
        ->whereBetween('created_at', [$start . ' 00:00:00', $end . ' 23:59:59'])
        ->get();

        return view('admin.sales.index',compact('invoices',"sales"));
        
  
        
    }




}
