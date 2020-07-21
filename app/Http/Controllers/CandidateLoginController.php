<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $email = $request->email;
        $password = $request->password;
        $check = DB::table('candidates')
            ->where('email', $email)
            ->first();
        // dd($check);
        if ($check && Hash::check($password, $check->password)) {
            $check->isLogin = 'candidate';
            $check = (array)$check;
            session($check);

            return redirect('/candidate/dashboard');
        }
        return back()->with('fail', 'Auth failed, please check your valid data. Or contact our administrator');
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
