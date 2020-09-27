<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\TeacherSecondaryEducation;
use Illuminate\Http\Request;

class TeacherSecondaryEducationController extends Controller
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
        $teachersList = Teacher::pluck('name', 'id');
        //dd($teachersList);
        return view('Backend.admin.Teacher.Education.Secondary.create', compact('teachersList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $secondary=$request->all();
        TeacherSecondaryEducation::create($secondary);
        return redirect()->route('Teacher.index')->with('message','Data has been inserted successfully');
        //dd($secondary);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeacherSecondaryEducation  $teacherSecondaryEducation
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherSecondaryEducation $teacherSecondaryEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeacherSecondaryEducation  $teacherSecondaryEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherSecondaryEducation $teacherSecondaryEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeacherSecondaryEducation  $teacherSecondaryEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherSecondaryEducation $teacherSecondaryEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeacherSecondaryEducation  $teacherSecondaryEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherSecondaryEducation $teacherSecondaryEducation)
    {
        //
    }
}
