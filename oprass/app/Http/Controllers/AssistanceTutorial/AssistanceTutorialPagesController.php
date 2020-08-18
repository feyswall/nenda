<?php

namespace App\Http\Controllers\AssistanceTutorial;

use App\Http\Controllers\Controller;
use App\TutAssistance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AssistanceTutorialPagesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:tutorial-assistance');
    }

    public  function  startPage(){
        $id = Auth::guard('tutorial-assistance')->user()->id;
        $lecture = TutAssistance::find($id);
        return view('assistance_tutorial/start')
            ->with('assistance_tutorial', $lecture );
    }

    public function createPassword(){
        return view('assistance_tutorial/auth/changePassword');
    }

    public function changePassword(Request $request){
          $validData = request()->validate([
               'password' => 'required|confirmed',
               'old_password' => 'required',
          ]);
          $userId = Auth::guard('tutorial-assistance')->user()->id;
            $assistance = TutAssistance::find($userId);

//                 if ( $pass == $request->old_password ){
//                 }else{
//
//                 }
        $assistance->password = $request->password;
        $assistance->save();
         session()->flash('done', 'Password was Change success');
          redirect()->route('assistance-tutorial.start');

    }
}
