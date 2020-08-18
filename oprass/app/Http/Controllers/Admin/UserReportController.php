<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Lecture;
use App\Mark;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReportController extends Controller
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
        $avr2 = [];
        $avr1 = [];
        $lectures = Lecture::all();
        foreach ( $lectures as $lecture ){
            $id = $lecture->profile->id;

//            $userId = Auth::guard('lecture')->user()->id;
            $marks = Mark::where('lecture_id', $id )->get();
            $markDown = 0;
            foreach ( $marks as $mark ){
                $markDown = $markDown + $mark->agreed;
            }
            if ($marks->count() < 1 ){
                $avr1[] = 0;
            }else{
                $avr1[] = $markDown/( $marks->count());
            }





            $mark = Attribute::where('lecture_id', $id )->get();
            $markDow = 0;
            foreach ( $mark as $mar ){
                $markDow = $markDow + $mar->agreed;
            }
            if ($mark->count() < 1 ){
                $avr2[] = 0;
            }else{
                $avr2[] = $markDow/( $mark->count());
            }

        }


//        $answer = ($avr2+$avr1)/2;
//        $ans = round($answer, 0 );
        return view('admin/finalReport')
            ->with('avr1', $avr1 )
            ->with('avr2', $avr2 )
            ->with('lectures', $lectures );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


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
