<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class signup extends Controller
{
    function createUser(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        if (sizeof(User::where('email', $email)->get()) > 0) {
            return redirect()->back()->with('status', 'Email already exists.');
        } else {
            $newuser = new User();
            $newuser->name = $name;
            $newuser->email = $email;
            $newuser->password = md5($password);
            $newuser->save();
            return redirect()->route('login')->with('status', 'Sign Up Success.');
        }
    }
}
