<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\LectureFillObjective;
use App\LectureObjective;
use App\Objective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LectureObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $objective = LectureObjective::paginate(5);
            return view('admin/objectives/revised_objectives')
                ->with('objectives', $objective);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            $objective = LectureObjective::paginate(3);
            return view('admin/objectives/lectureObjective')
                ->with('objectives', $objective);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if ( Auth::guard('admin')->check() ){
           $objective = new LectureObjective();
           $objective->objective = $request->objective;
           $objective->performance_targets = $request->performance_targets;
           $objective->performance_criteria = $request->performance_criteria;
           $objective->agreed_resource = $request->agreed_resource;
           $objective->save();

           session()->flash('done', 'Agreed Objective Saved');
           return redirect()->route('lecture.objectives.create');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
