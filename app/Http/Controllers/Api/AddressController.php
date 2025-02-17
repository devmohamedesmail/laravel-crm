<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    // add 
    public function add_address(Request $request)
    {
        $address = new Address();
        $address->addressen = $request->addressen;
        $address->addressar = $request->addressar;
        $address->save();
        return response()->json(["data" => $address, "message" => "Created"], 201);
    }
    public function update_address(Request $request, $id)
    {
        $address =  Address::findOrFail($id);
        $address->addressen = $request->addressen;
        $address->addressar = $request->addressar;
        $address->save();
        return response()->json(["data" => $address, "message" => "updated"], 201);
    }
    public function delete_address($id)
    {
        $address =  Address::findOrFail($id);
        $address->delete();
        return response()->json(["data" => $address, "message" => "deleted"], 201);
    }
    public function show_address()
    {
        $address =  Address::all();
        return response()->json(["data" => $address, "message" => "fetched"], 201);
    }
}
