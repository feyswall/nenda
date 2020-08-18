<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\LectureObjective;
use App\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::guard('lecture')->user();
        $objective = LectureObjective::all();
        return view('lecture/write_mark')
            ->with('objective', $objective)
            ->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->objId;


        $object = LectureObjective::find($id);

        $rating = DB::table('lecture_fill_objectives')
            ->where('lecture_objectives_id', $id)
            ->where('lecture_id', Auth::guard('lecture')->user()->id )->get();

        $mark = new Mark();
        $mark->agreed_objective = $object->objective;
        $mark->progress_made = $rating[0]->rate;
        $mark->appraisee = $request->markIn;
        $mark->lecture_id = Auth::guard('lecture')->user()->id;
        $mark->save();

        return response()->json([
           'success' => $mark
        ]);
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
