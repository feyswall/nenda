<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\MessageBag;


class LectureauthController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest:lecture');
    }

    public  function  startPage(){
        dd('The start page is just here');
    }


    public  function showLoginForm(){
        return view('lecture/auth/login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password'=> 'required',
            'check_number' => 'required',
        ]);


        if (Auth::guard('lecture')->attempt(['check_number' => $request->check_number, 'password' => $request->password])) {
            // Success
            return redirect()->intended(route('lecture.start-page'));
        } else {
            // Go back on error (or do what you want)
            $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
            return redirect()->back()->withErrors($errors)->withInput();
        }
    }



}
