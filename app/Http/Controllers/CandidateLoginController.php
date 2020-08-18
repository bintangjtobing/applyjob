<?php

namespace App\Http\Controllers;

use App\Candidate;
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

            return redirect('dashboard/candidate/');
        }
        return back()->with('fail', 'Auth failed, please check your valid data. Or contact our administrator');
    }
    public function showdashboardcandidate()
    {
        return view('candidate.dashboard.index');
    }
    public function showLoginForm()
    {
        return view('candidate.login');
    }
    public function informationmy($encode)
    {
        $decode = base64_decode($encode);
        // dd($decode);
    }
    public function settingmy($encode)
    {
        $decode = base64_decode($encode);
        // dd($decode);
        $info = Candidate::find($decode);
        return view('candidate.dashboard.setting');
        // dd($info);
    }
}
