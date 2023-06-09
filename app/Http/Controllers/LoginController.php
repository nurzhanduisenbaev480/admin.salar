<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController
{
    public function index()
    {
        return view("auth.login");
    }
    public function auth(Request $request){

        if(!is_null($request->email) && !is_null($request->password)){
            $user = User::where('email', $request->email)
                ->where('visible_password', $request->password)
                ->where('type', 'user')
                ->get()
                ->first();
            Auth::login($user);
            return redirect()->route('dashboard.index');
        }else{
            return redirect()->route('login');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
