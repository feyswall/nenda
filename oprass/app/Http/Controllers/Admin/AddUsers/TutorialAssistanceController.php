<?php

namespace App\Http\Controllers\Admin\AddUsers;

use App\Http\Controllers\Controller;
use App\TutAssistance;
use App\TutorialAssistanceProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TutorialAssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = TutorialAssistanceProfile::all();
        return view('admin/show_users/all-tutorial-assistance')
            ->with('profiles', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/add_user/tutorial_assistance');
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

        $tutorial_assistance = new TutAssistance();
        $tutorial_assistance->name = $validatedData['fname'];
        $tutorial_assistance->password = Hash::make($validatedData['lname']);
        $tutorial_assistance->email  = $request->email;
        $tutorial_assistance->check_number = $validatedData['check_number'];
        $tutorial_assistance->save();

        $tutorial_assistance->tutorialAssistanceProfile()->create($validatedData);

        return redirect()->route('tutorial_assistance.show', $tutorial_assistance->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutAss = TutAssistance::find($id);
        return view('admin/add_user/show_user')
            ->with('comf', $tutAss )
            ->with('player' , 'tutorial_assistance');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutAss = TutAssistance::find($id);
        return view('admin/update_users/tutorial_assistance')
            ->with('tutorial_assistance', $tutAss );
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
        $tutAssistance = TutAssistance::find($id);
        $profId =  $tutAssistance->tutorialAssistanceProfile->id;
        $profile = TutorialAssistanceProfile::find($profId);


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

        $tutAssistance->update(['email'=>$request->email, 'name'=>$request->fname, 'check_number'=>$request->check_number]);

        //Selecting data again
        $profile->update($validatedData);
        session()->flash('done', 'Update Success');
        return redirect()->route('tutorial_assistance.show', $profile->tut_assistance_id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutAssistance = TutAssistance::find($id);
        $tutAssistance->tutorialAssistanceProfile()->delete();
        $tutAssistance->delete();
        session()->flash('done', 'User Deleted successful');
        return redirect()->intended(route('tutorial_assistance.index'));
    }
}
