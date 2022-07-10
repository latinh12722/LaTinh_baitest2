<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class login extends Controller
{
    //return redirect()->back()->with('status', 'Edit database successful.');
    function checklogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->where('password', md5($password))->first();
        if ($user != null) {
            $request->session()->put('name', $user->name);
            return redirect()->route('index')->with('status', 'Login successfully.');
        } else {
            return redirect()->back()->with("status", "The password/ email that you've entered is incorrect.");
        }
    }
    function logout(Request $request){
        $request->session()->forget('name');
        return redirect()->route('login');
    }
}
