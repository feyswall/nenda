<?php

namespace App\Http\Controllers\Admin\AddUsers;

use App\Http\Controllers\Controller;
use App\Lecture;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LectureController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();
        return view('admin/show_users/all-lectures')
            ->with('profiles', $profile);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/add_user/lecture');
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
            'fname' => 'required|alpha',
            'mname' => 'required|alpha',
            'lname' => 'required|alpha',
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
            'birth' => 'required|before_or_equal:2002',
            'comment' => 'required',
        ]);

        $lecture = new Lecture();
           $lecture->name = $validatedData['fname'];
            $lecture->password = Hash::make($validatedData['lname']);
            $lecture->email  = $request->email;
            $lecture->check_number = $validatedData['check_number'];
              $lecture->save();

        $lecture->profile()->create($validatedData);

        return redirect()->route('lecture.show', $lecture->id );


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lecture = Lecture::find($id);
          return view('admin/add_user/show_user')
              ->with('comf', $lecture )
              ->with('player' , 'lecture');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecture = Lecture::find($id);
        return view('admin/update_users/lecture')
            ->with('lecture', $lecture );
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
        $lect = Lecture::find($id);
        $proId = $lect->profile->id;
        $profile = Profile::find($proId);

        if ($request->input('check_number') == $profile->check_number ) {
            $emailval = $request->validate([
                'email' => 'required',
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

        //Selecting data again
        $profile = Profile::find($proId);
        $pass = Hash::make($request->lname);
        $profile->lecture()->update([
            'email'=>$request->email,
            'name'=>$request->fname,
            'check_number' => $request->check_number,
            'password' => $pass,
        ]);


        $profile->update($validatedData);
        session()->flash('done', 'Update Success');
         return redirect()->route('lecture.show', $profile->lecture->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecture = Lecture::find($id);
          $lecture->profile()->delete();
           $lecture->delete();
           session()->flash('done', 'User Deleted successful');
        return redirect()->intended(route('lecture.index'));
    }
}
