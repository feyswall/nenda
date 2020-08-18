<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\MessageBag;

class SupervisorAuthController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest:supervisor');
    }

    public  function  startPage(){
        dd('The start page is just here');
    }


    public  function showLoginForm(){
        return view('supervisor/auth/login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email'           => 'required|max:255|email',
            'password'           => 'required',
            'check_number' => 'required',
        ]);
        if (Auth::guard('supervisor')->attempt(['check_number' => $request->check_number, 'password' => $request->password])) {
            // Success
            return redirect()->intended(route('supervisor.start'));
        } else {
            // Go back on error (or do what you want)
            $error = new MessageBag(['password' => ['Incorrect Check number Or Password Used']]);
            return redirect()->back()->withErrors($error)->withInput();
        }
    }
}
