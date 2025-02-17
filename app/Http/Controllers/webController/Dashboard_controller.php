<?php

namespace App\Http\Controllers\webController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard_controller extends Controller
{
    //
    public function index(){
        try {
            return view("admin.dashboard.index");
        } catch (\Throwable $th) {
            return view("404",compact('th'));
        }
       
    }
}
