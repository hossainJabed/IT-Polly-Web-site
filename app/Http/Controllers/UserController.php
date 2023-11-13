<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public $user;
    public function login()
    {
        return view('frontend.login.login');
    }

    public function loginConfirm(Request $request)
    {
        $this->user = Login::where('email', $request->email)->first();
        if ($this->user)
        {
            if (password_verify($request->password, $this->user->password))
            {
                Session::put('client_id', $this->user->id);
                Session::put('client_email', $this->user->email);
                return redirect('/client/dashboard')->with('success', 'Successfully logged in.');
            }
            else
            {
                return back()->with('error', 'Wrong password..please try again!');
            }
        }
        else
        {
            return back()->with('error', 'Invalid credential.. please try again!');
        }
    }

    public function register()
    {
        return view('frontend.login.register');
    }

    public function registerConfirm(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|string',
            'email' => 'required|email|unique:logins,email',
            'password' => 'required|min:6'
        ]);
        $this->user = Login::createClient($request);
        if ($this->user)
        {
            Session::put('client_id', $this->user->id);
            Session::put('client_email', $this->user->email);
            return redirect('/client/dashboard');
        }
    }

    public function dashboard()
    {
        return view('frontend.dashboard.index');
    }

    public function logout()
    {
        Session::forget('client_id');
        Session::forget('client_email');
        return redirect('/login');
    }
}
