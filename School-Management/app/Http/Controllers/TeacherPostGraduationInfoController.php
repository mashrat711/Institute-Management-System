<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\TeacherPostGraduationInfo;
use Illuminate\Http\Request;

class TeacherPostGraduationInfoController extends Controller
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
        return view('Backend.admin.Teacher.Education.PostGraduation.create', compact('teachersList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=$request->all();
      TeacherPostGraduationInfo::create($post);
        return redirect()->route('Teacher.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeacherPostGraduationInfo  $teacherPostGraduationInfo
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherPostGraduationInfo $teacherPostGraduationInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeacherPostGraduationInfo  $teacherPostGraduationInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherPostGraduationInfo $teacherPostGraduationInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeacherPostGraduationInfo  $teacherPostGraduationInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherPostGraduationInfo $teacherPostGraduationInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeacherPostGraduationInfo  $teacherPostGraduationInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherPostGraduationInfo $teacherPostGraduationInfo)
    {
        //
    }
}
