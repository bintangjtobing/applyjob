<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{

    use AuthenticatesUsers;
    protected $guard = 'member';
    protected $redirectTo = '/';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function guard()
    {
        return auth()->guard('member');
    }
    public function login(Request $request)
    {
        if (auth()->guard('member')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('adminpage');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }
    public function showdashboardadmin()
    {
        return view('admin.index');
    }
}
