<?php

namespace App\Http\Controllers\ApiAuth;

use App\Models\User;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class AuthController extends Controller
{
    // login function 
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create($validated);
        $token = $user->createToken($request->name);
        return [
            'user' => $user,
            'token' => $token->plainTextToken
        ];
    }

    // login 
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return [
                'message' => 'gfg'
            ];
        }

        $token = $user->createToken($user->name);
        return [
            'user' => $user,
            'token' => $token->plainTextToken
        ];
    }

    // logout 
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return ['message' => 'you are logout'];
    }

    // show_users
    public function show_users(){
        $users = User::all();
        return response()->json(["data"=>$users,"message"=>"Users fetched successfully"],201);
    }

    public function update_user($id,Request $request){
        $user=User::findOrFail($id);
        $user->branch = $request->branch;
        
        if ($request->role) {
            $user->role = $request->role;
        }
        $user->save();
        return response()->json(["data"=>$user,"message"=>"user updated"],201);

    }
    // delete_user
    public function delete_user($id){
        $user=User::findOrFail($id);
        $user->delete();
        return response()->json(["message"=>"user updated"],201); 
    }


    public function import_users(Request $request){
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);
        return response()->json(["message"=>"Success"],201);
    }
    
    public function user_profile($id){
        $user=User::findOrFail($id);
        return response()->json(["data"=>$user,"message"=>"user pofile"],201); 
    }
    
    
    // update_user_password
    public function update_user_password($id){
    $user = User::findOrFail($id);

    // Check if the user exists
    if (!$user) {
        return false;
    }

    $newPassword = '7M46hanna';
    // Hash the new password
    $hashedPassword = Hash::make($newPassword);
    $user->password = $hashedPassword;
    $user->save();
    return response()->json(["data"=>$user,"message"=>"user password updated "],201);
    }
    
    
    
    
    
    
    
    
    
    

}
