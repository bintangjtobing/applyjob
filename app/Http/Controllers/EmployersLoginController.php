<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;

use App\Employers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class EmployersLoginController extends Controller
{

    use AuthenticatesUsers;
    protected $guard = 'employers';
    protected $redirectTo = '/';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function guard()
    {
        return auth()->guard('employers');
    }
    public function login(Request $request)
    {
        if (auth()->guard('employers')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('employerspage');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }
    public function showdashboardemploy()
    {
        return view('employ.index');
    }
}
