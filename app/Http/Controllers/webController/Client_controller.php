<?php

namespace App\Http\Controllers\webController;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Client_controller extends Controller
{
    //

    public function show_clients_page(){
        try {
            $clients = Client::all();
            return view("admin.clients.index",compact('clients'));
        } catch (\Throwable $th) {
            return view("404",compact('th'));
        }
    }
}
