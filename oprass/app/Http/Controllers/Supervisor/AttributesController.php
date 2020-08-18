<?php

namespace App\Http\Controllers\Supervisor;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Lecture;
use Illuminate\Http\Request;

class AttributesController extends Controller
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
        $attributes = Lecture::all();
        return view('supervisor/attr_user')
            ->with('lectures', $attributes );
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

        $attributes = Attribute::where('lecture_id', $id )->get();
        $value = 0;
        foreach ( $attributes as $attr ){
                $value = $value + $attr->agreed;
        }
           $ans = ( $value/$attributes->count() );
        return view('supervisor/attributes')
            ->with('attributes', $attributes )
            ->with('avr', $ans );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $attr = Attribute::find($id);
        $ag = $attr->appraisee;
        $agry = ($ag + $request->grade)/2;

        $avg = $attr->agreed = $agry;
          $attr->supervisor = $request->grade;
          $attr->save();
        return redirect()->route('supervisor.attributes.show', $attr->lecture_id );
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
