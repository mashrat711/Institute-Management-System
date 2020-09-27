<?php

namespace App\Http\Controllers;

use App\Session;
use App\StudentSession;
use Illuminate\Http\Request;

class StudentSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $student_sessions=StudentSession::with('sessions')->get();
//        return view('Backend.admin.Courses.studentsessions.index',compact('student_sessions'));
//        dd($student_sessions);
        //dd(StudentSession::all());
        //return StudentSession::find(1)->sessions;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$student_sessions=StudentSession::with('sessions')->get();

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
     * @param  \App\StudentSession  $studentSession
     * @return \Illuminate\Http\Response
     */
    public function show(StudentSession $studentSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentSession  $studentSession
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentSession $studentSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentSession  $studentSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentSession $studentSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentSession  $studentSession
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentSession $studentSession)
    {
        //
    }
}
