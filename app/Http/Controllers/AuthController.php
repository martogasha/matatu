<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(Request $request){
        $register = User::create([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'role'=>$request['role'],
            'password'=>Hash::make($request['password']),
        ]);
        return redirect(url('login'))->with('success','REGISTER SUCCESS');
    }
    public function loginUser(Request $request){
        if (Auth::attempt([
            'phone' => $request->phone,
            'password' => $request->password,
        ])){
            $user = User::where('phone',$request->phone)->first();

            if ($user->role == 1){
                return redirect(url('conductor'))->with('success','CONDUCTOR LOGIN SUCCESS');
            }
            elseif ($user->role ==2){
                return redirect(url('/'))->with('success','LOGIN SUCCESS');
            }
            else{
                return redirect(url('login'))->with('error', 'CREDENTIALS DOES NOT MATCH');
            }
        }
    }
}
