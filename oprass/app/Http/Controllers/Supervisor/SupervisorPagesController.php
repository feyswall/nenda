<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Lecture;
use App\Mark;
use App\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorPagesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:supervisor');
    }

    public  function  startPage(){
        $id = Auth::guard('supervisor')->user()->id;
        $supervisor = Supervisor::find($id);
        return view('supervisor/start')
            ->with('supervisor', $supervisor);
    }



    public function allUsers(){
         $users = Lecture::all();
           return view('supervisor/all_users')
               ->with('users', $users );
    }



    public function section_one(){
        $users = Lecture::paginate(5);
         $submitted = Mark::paginate(4);
           return view('supervisor/all_users')
               ->with('marks', $submitted)
               ->with('users', $users );
    }



    public function lecture_view($id){
        $users = Lecture::find($id);
         $marks = $users->marks;
           $avg = 0;
            foreach ( $marks as $mark ){
                $avg = $avg + $mark->agreed;
            }
              if (count($marks) !== 0 ){
                  $average = $avg/count($marks);
              }else{
                  $average = 0;
              }
              $average = round($average, 2 );

        return view('supervisor/filled_mark')
            ->with( 'marks', $marks )
            ->with('average', $average );
    }


    public function userReport(){
        return view('admin/finalReport');
    }


}
