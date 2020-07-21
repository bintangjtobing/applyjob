<?php

namespace App\Http\Controllers;

use App\Employers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class EmployersLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $guard = 'employers';

    public function __construct()
    {
        $this->middleware('guest:employers');
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
    public function showLoginForm()
    {
        return view('employ.login');
    }
}
