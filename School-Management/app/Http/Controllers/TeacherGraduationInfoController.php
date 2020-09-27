<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\TeacherGraduationInfo;
use Illuminate\Http\Request;

class TeacherGraduationInfoController extends Controller
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
        return view('Backend.admin.Teacher.Education.Graduation.create', compact('teachersList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $higherSecondary=$request->all();
        TeacherGraduationInfo::create($higherSecondary);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeacherGraduationInfo  $teacherGraduationInfo
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherGraduationInfo $teacherGraduationInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeacherGraduationInfo  $teacherGraduationInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherGraduationInfo $teacherGraduationInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeacherGraduationInfo  $teacherGraduationInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherGraduationInfo $teacherGraduationInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeacherGraduationInfo  $teacherGraduationInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherGraduationInfo $teacherGraduationInfo)
    {
        //
    }
}
