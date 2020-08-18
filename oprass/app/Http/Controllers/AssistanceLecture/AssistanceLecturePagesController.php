<?php

namespace App\Http\Controllers\AssistanceLecture;

use App\Http\Controllers\Controller;
use App\LectAssistance;
use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssistanceLecturePagesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:assistance-lecture');
    }

    public  function  startPage(){
        $id = Auth::guard('assistance-lecture')->user()->id;
        $lecture = LectAssistance::find($id);
        return view('assistance_lecture/start')
            ->with('assistance_lecture', $lecture );
    }
}
