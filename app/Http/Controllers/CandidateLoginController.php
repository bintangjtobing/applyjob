<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CandidateLoginController extends Controller
{

    use AuthenticatesUsers;
    protected $guard = 'candidates';
    protected $redirectTo = '/';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function guard()
    {
        return auth()->guard('candidates');
    }
    public function login(Request $request)
    {
        dd($request->all());
        // if (Auth::attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ])) {
        // return redirect('/candidates-dashboard');
        // dd(Auth::check());
        // dd($request->all());
        // }
        // return back()->withErrors(['email' => 'Email or password are wrong.']);
    }
    public function showdashboardcandidate()
    {
        return view('candidate.index');
    }
}
