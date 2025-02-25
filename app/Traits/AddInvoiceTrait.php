<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

trait AddInvoiceTrait
{
    public function storeInvoiceData($model,$request)
    {
       
 
        if (Auth::check()) {
            $validated = $request->validate([
                'branch' => 'required',
                'carNo' => 'required',
                'carType' => 'required',
                'carService' => 'required',
                'price' => 'required',
                'note' => 'required',
    
            ]);

            $invoice = new $model();
            $invoice->branch_id = $request->branch;
            $invoice->branchName = $request->branchName;
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
            $invoice->sales = Auth::user()->name;
            $invoice->trn_no = $request->trn_no;
            $invoice->save();
    
            return $invoice;
        }else{
            return redirect()->route('login');
        }
       
    }
}
