<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\MessageBag;


class AdminLoginController extends Controller
{
  public function __construct()
  {
      return $this->middleware('guest:admin');
  }


    public  function showLoginForm(){
        return view('admin/auth/loginForm');
    }

    public function login(Request $request ){
        $this->validate($request, [
            'email'           => 'required|max:255|email',
            'password'           => 'required',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Success
            return redirect()->intended(route('admin.dashboard'));
        } else {
            // Go back on error (or do what you want)
            $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
            return redirect()->back()->withErrors($errors)->withInput();
        }
    }
}
