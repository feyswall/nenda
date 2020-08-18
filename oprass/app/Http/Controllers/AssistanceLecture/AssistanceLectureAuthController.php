<?php

namespace App\Http\Controllers\AssistanceLecture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\MessageBag;

class AssistanceLectureAuthController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest:assistance-lecture');
    }

    public  function  startPage(){
        dd('The start page is just here');
    }


    public  function showLoginForm(){
        return view('assistance_lecture/auth/login');
    }

    public function login(Request $request){

        $this->validate($request, [
            'password'           => 'required',
            'check_number' => 'required',
        ]);


        if (Auth::guard('assistance-lecture')->attempt(['check_number' => $request->check_number, 'password' => $request->password])) {
            // Success
            return redirect()->intended(route('assistance-lecture.start'));
        } else {
            // Go back on error (or do what you want)
            $error = new MessageBag(['password' => ['Incorrect Email Or Password Used']]);
            return redirect()->back()->withErrors($error)->withInput();
        }
    }
}
