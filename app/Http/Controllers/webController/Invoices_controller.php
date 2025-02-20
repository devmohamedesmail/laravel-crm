<?php

namespace App\Http\Controllers\webController;

use App\Models\Branch;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\InvoiceNote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\AddInvoiceTrait;

class Invoices_controller extends Controller
{
    use AddInvoiceTrait;



    // ******************************************** show_invoices ******************************************/
    public function show_invoices()
    {

        try {
            $invoices = Invoice::orderBy("id", "desc")->get();
            return view('admin.invoices.index', compact('invoices'));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }

    // ******************************************** show_invoices ******************************************/










    // ******************************************** Add New Invoice ******************************************/
    public function add_invoice(Request $request)
    {
        try {
            return view("admin.invoices.add");
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }

    // ******************************************** Add New Invoice ******************************************/








    //**********************************************  Edit invoice *****************************************/
    public function edit_invoice($id)
    {

        try {
            $invoice = Invoice::findOrFail($id);
            return view("admin.invoices.edit", compact("invoice"));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }
    //**********************************************  Edit invoice *****************************************/








    //**********************************************  Edit invoice Confiramtion *****************************************/
    public function edit_invoice_confimation($id, Request $request)
    {
        $invoice = Invoice::findOrFail($id,);
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
        if ($request->sales !== null) {
            $invoice->sales = $request->sales;
        }
        $invoice->trn_no = $request->trn_no;

        $invoice->save();
        return redirect()->back()->with('success', __('translate.updated'));
    }
    //**********************************************  Edit invoice Confiramtion *****************************************/











    //*********************************************  add_invoice *****************************************************/
    public function add_new_invoice(Request $request)
    {

        $invoice = $this->storeInvoiceData(Invoice::class, $request);
        $client = $this->storeInvoiceData(Client::class, $request);
        return redirect()->back()->with('success', __('translate.added'));
    }

    //*********************************************  add_invoice *****************************************************/














    // ******************************************** delete_invoice ************************************************/
    public function delete_invoice($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();
        return redirect()->back()->with('success', __('translate.deleted'));
    }
    // ******************************************** delete_invoice ************************************************/















    // ***************************************************** print invoice ****************************************/
    public function print_invoice($id)
    {
        try {
            $notes = InvoiceNote::all();
            $invoice = Invoice::findOrFail($id);
            return view("admin.invoices.print", compact("invoice", "notes"));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }
    // ***************************************************** print invoice ****************************************/

















    // ********************************************* show_branch_invoices ******************************************/
    public function show_branch_invoices($id)
    {
        try {
            $branch = Branch::findOrFail($id);
            $invoices = $branch->invoices()->get();
            return view("admin.invoices.index", compact("invoices"));
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }

    // ********************************************* show_branch_invoices ******************************************/
}
