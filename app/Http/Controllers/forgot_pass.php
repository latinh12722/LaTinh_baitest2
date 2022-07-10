<?php

namespace App\Http\Controllers;

use App\Mail\resetPass;
use App\Models\reset_pass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class forgot_pass extends Controller
{
    function forgot_pass(Request $request)
    {
        $token = "";
        $mail = $request->email;
        $user = User::where('email', $mail)->first();
        if ($user != null) {
            do {
                $token = Str::random(32);
            } while (reset_pass::where("token", "=", $token)->first() instanceof User);
            if ($token != "") {
                $mailreset = new resetPass($token);
                $mailreset->settoken($token);
                Mail::to($request->email)->send($mailreset);
                $resetpass = new reset_pass();
                $resetpass->email = $request->email;
                $resetpass->token = $token;
                $resetpass->save();
                return redirect()->back()->with('status', 'Send email reset password successfully');
            } else {
                return redirect()->back()->with('status', 'Error');
            }
        } else {
            return redirect()->back()->with("status", "Email is not registered.");
        }
    }
    function formresetpass(Request $request)
    {
        $reset_pass = reset_pass::where('token', $request->token)->first();
        if ($reset_pass->isuse === 1) {
            return redirect()->route('forgot-pass')->with('status', 'The link is old. Please make a good request.');
        } else {
            return view('reset_pass')->with('token', $request->token);
        }
    }
    function resetpass(Request $request)
    {
        if ($request->password === $request->confirm_password) {
            $reset = reset_pass::where('token',$request->token)->first();
            User::where('email', $reset->email)->update(['remember_token' => $reset->token, 'password' => md5($request->password)]);
            reset_pass::where('token', $reset->token)->update(['isuse' => 1]);
            return redirect()->route('login')->with('status', 'Reset password successfully.');
        } else {
            return redirect()->back()->with('status', 'Error.');
        }
    }
}
