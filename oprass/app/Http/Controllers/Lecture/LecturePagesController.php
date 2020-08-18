<?php

namespace App\Http\Controllers\Lecture;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Lecture;
use App\LectureObjective;
use App\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LecturePagesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:lecture');
    }

    public  function  startPage(){
        $id = Auth::guard('lecture')->user()->id;
          $lecture = Lecture::find($id);
        return view('lecture/start')
            ->with('lecture', $lecture);
    }


    public function showLectObject()
    {
        if (Auth::guard('lecture')->check()) {
            $objective = LectureObjective::paginate(3);
            return view('lecture/all_lecture_objectives')
                ->with('objectives', $objective);
        }
    }


    public function revised()
    {
        if (Auth::guard('lecture')->check()) {
            $objective = LectureObjective::paginate(3);
            return view('lecture/revised_objectives')
                ->with('objectives', $objective);
        }
    }

    public function reportView(){
        $userId = Auth::guard('lecture')->user()->id;
         $marks = Mark::where('lecture_id', $userId )->get();
         $markDown = 0;
         foreach ( $marks as $mark ){
              $markDown = $markDown + $mark->agreed;
         }
            if($marks->count() < 1 ){
                $avr1 = 0;
            }else{
                $avr1 = $markDown/( $marks->count());
            }


        $mark = Attribute::where('lecture_id', $userId )->get();
        $markDow = 0;
        foreach ( $mark as $mar ){
            $markDow = $markDow + $mar->agreed;
        }
        if ($mark->count() < 1 ){
            $avr2 = 0;
        }else{
            $avr2 = $markDow/( $mark->count());
        }
    
        $answer = ($avr2+$avr1)/2;

                $ans = round($answer, 0 );

        return view('lecture/viewReport')
            ->with('ans', $answer )
            ->with('mark', $mark )
            ->with('attribute', $mark );


    }


}
