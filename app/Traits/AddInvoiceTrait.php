<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait AddInvoiceTrait
{
    public function storeInvoiceData($model,$request)
    {
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
        $invoice->sales = $request->sales;
        $invoice->trn_no = $request->trn_no;
        $invoice->save();

        return $invoice;
    }
}
