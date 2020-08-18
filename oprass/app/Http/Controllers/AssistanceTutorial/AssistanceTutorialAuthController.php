<?php

namespace App\Http\Controllers\AssistanceTutorial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\MessageBag;

class AssistanceTutorialAuthController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest:tutorial-assistance');
    }

    public  function  startPage(){
        dd('The start page is just here');
    }


    public  function showLoginForm(){
        return view('assistance_tutorial/auth/login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'check_number'           => 'required|max:255',
            'password'           => 'required',
        ]);
        if (Auth::guard('tutorial-assistance')->attempt(['check_number' => $request->check_number, 'password' => $request->password])) {
            // Success
            return redirect()->intended(route('assistance-tutorial.start'));
        } else {
            // Go back on error (or do what you want)
            $error = new MessageBag(['password' => ['Incorrect Email Or Password Used']]);
            return redirect()->back()->withErrors($error)->withInput();
        }
    }
}
