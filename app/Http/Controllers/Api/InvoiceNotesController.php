<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InvoiceNote;
use Illuminate\Http\Request;

class InvoiceNotesController extends Controller
{
    // add_note
    public function add_note(Request $request){
        $note = new InvoiceNote();
        $note->noteen = $request->noteen;
        $note->notear = $request->notear;
        $note->save();
        return response()->json(['data'=>$note,'message'=>'Note added Successfully'],201);
    }

    // show_notes
    public function show_notes(){
        $notes = InvoiceNote::all(); 
        return response()->json(['data'=>$notes,'message'=>'Notes fetched Successfully'],201);
    }

    // delete
    public function delete_note($id){
        $note = InvoiceNote::findOrFail($id); 
        $note->delete();
        return response()->json(['message'=>'Notes deleted Successfully'],201);
    }
    public function upadate_note(Request $request,$id){
        $note = InvoiceNote::findOrFail($id);
        $note->noteen = $request->noteen;
        $note->notear = $request->notear;
        $note->save();
        return response()->json(['data'=>$note,'message'=>'Note updated Successfully'],201);
    }
}
