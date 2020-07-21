<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{

    use AuthenticatesUsers;
    protected $guard = 'member';

    public function __construct()
    {
        $this->middleware('guest:member');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $check = DB::table('users')
            ->where('email', $email)
            ->first();
        // dd($check);
        if ($check && Hash::check($password, $check->password)) {
            $check->isLogin = 'admin';
            $check = (array)$check;
            session($check);

            return redirect('/admin');
        }
    }
    public function showdashboardadmin()
    {
        return view('admin.index');
    }
    public function showLoginForm()
    {
        return view('admin.login');
    }
}
