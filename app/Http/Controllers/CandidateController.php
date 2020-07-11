<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Illuminate\Support\Facades\Hash;

class CandidateController extends Controller
{
    public function registernewuser(Request $request)
    {
        $candidate = new Candidate();
        $candidate->firstname = $request->firstname;
        $candidate->lastname = $request->lastname;
        $candidate->email = $request->email;
        $candidate->password = Hash::make($request->password);
        $candidate->unpass = $request->password;
        $candidate->save();
        dd($request->all());
    }
}
