<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CandidateLoginController extends Controller
{
    protected $guard = 'candidates';

    public function __construct()
    {
        $this->middleware('guest:candidates');
    }
    public function login(Request $request)
    {
        // validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // attempt to log the user in
        if (Auth::guard('candidates')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if success, redirect to location
            return redirect()->intended(route('candidates.dashboard'));
            // return true;
        }
        // if unsuccess, redirect back to login
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function showdashboardcandidate()
    {
        return view('candidate.index');
    }
    public function showLoginForm()
    {
        return view('candidate.login');
    }
}
