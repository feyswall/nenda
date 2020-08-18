<?php

namespace App\Http\Controllers\Admin\AddUsers;

use App\AssistanceLectureProfile;
use App\Http\Controllers\Controller;
use App\LectAssistance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AssistanceLectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = AssistanceLectureProfile::all();
        return view('admin/show_users/all-assistance-lectures')
            ->with('profiles', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/add_user/assistance_lecture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:lectures',
        ]);
        $validatedData = $request->validate([
            'check_number' => 'required|unique:profiles',
            'present_station' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'vote_code' => 'required',
            'sub_vote' => 'required',
            'academic' => 'required',
            'duty_post' => 'required',
            'substantive_post' => 'required',
            'fapointment' => 'required',
            'papointment' => 'required',
            'salary' => 'required',
            'period' => 'required',
            'birth' => 'required',
            'comment' => 'required',
        ]);

        $assistance_lecture = new LectAssistance();
        $assistance_lecture->name = $validatedData['fname'];
        $assistance_lecture->password = Hash::make($validatedData['lname']);
        $assistance_lecture->email  = $request->email;
        $assistance_lecture->check_number = $validatedData['check_number'];
        $assistance_lecture->save();

        $assistance_lecture->assistancelectureprofile()->create($validatedData);

        return redirect()->route('assistance_lecture.show', $assistance_lecture->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asslecture = LectAssistance::find($id);
        return view('admin/add_user/show_user')
            ->with('comf', $asslecture )
            ->with('player' , 'assistance_lecture');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asslecture = LectAssistance::find($id);
        return view('admin/update_users/assistance_lecture')
            ->with('lecture', $asslecture );
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
        // Validate the data
        $assistancelecture = LectAssistance::find($id);
       $profId =  $assistancelecture->assistancelectureprofile->id;
           $profile = AssistanceLectureProfile::find($profId);

        if ($request->input('check_number') == $profile->check_number ) {
            $emailval = $request->validate([
                'email' => 'required',
                'fname' => 'required',
            ]);
            $validatedData = $request->validate([
                'present_station' => 'required',
                'fname' => 'required',
                'mname' => 'required',
                'lname' => 'required',
                'gender' => 'required',
                'vote_code' => 'required',
                'sub_vote' => 'required',
                'academic' => 'required',
                'duty_post' => 'required',
                'substantive_post' => 'required',
                'fapointment' => 'required',
                'papointment' => 'required',
                'salary' => 'required',
                'period' => 'required',
                'birth' => 'required',
                'comment' => 'required',
            ]);
        } else {
            $emailval = $request->validate([
                'email' => 'required',
                'fname' => 'required',
            ]);
            $validatedData = $request->validate([
                'check_number' => 'required|unique:profiles',
                'present_station' => 'required',
                'fname' => 'required',
                'mname' => 'required',
                'lname' => 'required',
                'gender' => 'required',
                'vote_code' => 'required',
                'sub_vote' => 'required',
                'academic' => 'required',
                'duty_post' => 'required',
                'substantive_post' => 'required',
                'fapointment' => 'required',
                'papointment' => 'required',
                'salary' => 'required',
                'period' => 'required',
                'birth' => 'required',
                'comment' => 'required',
            ]);
        }

        $assistancelecture->update(['email'=>$request->email, 'name'=>$request->fname, 'check_number'=>$request->check_number]);

        //Selecting data again
        $profile->update($validatedData);
        session()->flash('done', 'Update Success');
        return redirect()->route('assistance_lecture.show', $profile->lect_assistance_id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $lecture = LectAssistance::find($id);
        $lecture->assistancelectureprofile()->delete();
        $lecture->delete();
        session()->flash('done', 'User Deleted successful');
        return redirect()->intended(route('assistance_lecture.index'));
    }
}
