<?php

namespace App\Http\Controllers\webController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard_controller extends Controller
{
    //
    public function index()
    {
        try {
            return view("admin.dashboard.index");
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }



    // ******************************* Private Policy *******************************

    public function privacy_policy()
    {
        try {
            return view("privacy");
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }


    // ******************************* contact us *******************************

    public function contact_us()
    {
        try {
            return view("contact");
        } catch (\Throwable $th) {
            return view("404", compact('th'));
        }
    }


}
