<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Mark;
use Illuminate\Http\Request;

class MarksController extends Controller
{

    public function update(Request $request, $id)
    {

       $profile = Mark::find($id);
       $ag = $profile->appraisee;
        $agry = ($ag + $request->grade)/2;
       $profile->supervisor = $request->grade;
       $profile->agreed = $agry;
       $profile->save();
       return redirect()->route('supervisor.lecture_view', $profile->lecture_id );
    }


}
