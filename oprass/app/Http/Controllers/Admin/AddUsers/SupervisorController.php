<?php

namespace App\Http\Controllers\Admin\AddUsers;

use App\Http\Controllers\Controller;
use App\Supervisor;
use App\SupervisorProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupervisorController extends Controller
{

    public  function __construct()
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
        $profile = SupervisorProfile::all();
        return view('admin/show_users/all-supervisor')
            ->with('profiles', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/add_user/supervisor');
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

        $supervisor = new Supervisor();
        $supervisor->name = $validatedData['fname'];
        $supervisor->password = Hash::make($validatedData['lname']);
        $supervisor->email  = $request->email;
        $supervisor->check_number = $validatedData['check_number'];
        $supervisor->save();

        $supervisor->supervisorprofile()->create($validatedData);

        return redirect()->route('supervisor.show', $supervisor->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supervisor = Supervisor::find($id);
        return view('admin/add_user/show_user')
            ->with('comf', $supervisor )
            ->with('player', 'supervisor');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supervisor = Supervisor::find($id);
        return view('admin/update_users/supervisor')
            ->with('supervisor', $supervisor );
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
        $supervisor = Supervisor::find($id);
        $profId =  $supervisor->supervisorprofile->id;


        $profile = SupervisorProfile::find($profId);

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
        $profile->supervisor()->update(['email'=>$request->email, 'name' => $request->fname, 'check_number' => $request->check_number]);

        //Selecting data again
        $profile->update($validatedData);
        session()->flash('done', 'Update Success');
        return redirect()->route('supervisor.show', $profile->supervisor->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Please dont be confused lecture means user

        $supervisor = Supervisor::find($id);
        $supervisor->supervisorprofile()->delete();
        $supervisor->delete();
        session()->flash('done', 'User Deleted successful');
        return redirect()->intended(route('supervisor.index'));
    }
}
