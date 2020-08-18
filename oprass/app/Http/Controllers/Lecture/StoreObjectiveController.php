<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\Lecture;
use App\LectureFillObjective;
use App\LectureObjective;
use App\Objective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreObjectiveController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $store  = LectureFillObjective::all();
            $objective= LectureObjective::all();
            return view('lecture/storeObjectives')
                ->with('objectives', $objective)
                ->with('store', $store);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeData(Request $request)
    {
        $lecture_id = Auth::guard('lecture')->user()->id;

        $val = explode("&", $request->inputs);

            $status_data= explode("=", $val[0] );
            $status = $status_data[1];

            $new_value = explode("=", $val[1] );
            $nameId = $new_value[1];

            $why_data= explode("=", $val[2] );
            $why = $why_data[1];

        $store = LectureFillObjective::where('lecture_id', $lecture_id )
            ->where('lecture_objectives_id', $nameId)
            ->count();

        if ( $store > 0 ){
            $obj = LectureFillObjective::where('lecture_id', $lecture_id )
                ->where('lecture_objectives_id', $nameId)
                ->update([
                    'lecture_objectives_id' => $nameId,
                    'rate' => $status,
                    'lecture_id' => $lecture_id
                ]);
            return response()->json([
                'status'=>$status,
                'obje' =>$request->objectid,
                'id' => $nameId,
            ]);
        }else{
            $obj = new LectureFillObjective();
            $obj->lecture_objectives_id = $nameId;
            $obj->rate = $status;
            $obj->lecture_id = $lecture_id;
            $obj->save();
            return response()->json([
                'status'=>$status,
                'obje' =>$request->objectid,
//                'objec' => $request->objectc,
//                'objer' => $request->objectr,
//                'objet' => $request->objectt,

                'id' => $nameId,
            ]);
        }


    }

}
