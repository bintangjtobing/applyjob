<?php

namespace App\Http\Controllers;

use App\Employers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $email = $request->email;
        $password = $request->password;
        $check = DB::table('employers')
            ->where('email', $email)
            ->first();
        // dd($check);
        if ($check && Hash::check($password, $check->password)) {
            $check->isLogin = 'employ';
            $check = (array)$check;
            session($check);

            return redirect('/employ/dashboard');
        }
        return back()->with('fail', 'Auth failed, please check your valid data. Or contact our administrator');
    }
    public function showdashboardemploy()
    {
        return view('employ.index');
    }
    public function showLoginForm()
    {
        return view('employ.login');
    }
    public function employershomepage()
    {
        return view('employ.home.index');
    }
}
