<?php

namespace App\Http\Controllers\Lecture;

use App\Attribute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Attributes extends Controller
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
        return view('lecture/attributes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $userId = Auth::guard('lecture')->user()->id;
            $ans = Attribute::where('attribute', $request->ability)
                ->where('lecture_id', $userId)->count();
            if ($ans > 0) {
                Attribute::where('attribute', $request->ability)
                    ->where('lecture_id', $userId)->update([
                        'appraisee' => $request->inData
                    ]);
            } else {
                $data = new Attribute();
                $data->factor = $request->work;
                $data->attribute = $request->ability;
                $data->appraisee = $request->inData;
                $data->lecture_id = $userId;
                $data->save();
            }
            return response()->json([
                'status' => 'success'
            ]);


//        }elseif($request->unqId == 'two'){
//            $userId =  Auth::guard('lecture')->user()->id;
//            $ans = Attribute::where('attribute', $request->ability )
//                ->where( 'lecture_id', $userId)->count();
//            if ( $ans > 0 ){
//                Attribute::where( 'attribute', $request->ability)
//                    ->where( 'lecture_id', $userId  )->update([
//                        'appraisee' => $request->inData
//                    ]);
//            }else{
//                $data = new Attribute();
//                $data->factor = $request->work;
//                $data->attribute = $request->ability;
//                $data->appraisee = $request->inData;
//                $data->save();
//            }
//            return response()->json([
//                'status' => 'success'
//                ]);
//        }

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
