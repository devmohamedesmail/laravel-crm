<?php

namespace App\Http\Controllers\Api;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    // setting_update
    public function setting_update(Request $request,$id){
        $setting = Setting::findOrFail($id);
        $setting->nameen = $request->nameen;
        $setting->namear = $request->namear;
        $setting->email = $request->email;
        $setting->website = $request->website;
        $logo = $request->logo;
        if ($logo) {
            $imageName = time(). '' . $logo->getClientOriginalExtension();
            $logo->move('uploads/setting',$imageName);
            $setting->logo = $imageName;
        }
        $setting->save();
        return response()->json(['data' => $setting, 'message' => 'Updated'], 201);
        
        
    }
    
    // setting_get
    public function setting_get($id){
         $setting = Setting::findOrFail($id);
         return response()->json(['data' => $setting, 'message' => 'Updated'], 201);
    }
}
