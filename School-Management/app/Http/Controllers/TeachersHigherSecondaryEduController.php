<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\TeachersHigherSecondaryEdu;
use Illuminate\Http\Request;

class TeachersHigherSecondaryEduController extends Controller
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
        return view('Backend.admin.Teacher.Education.HigherSecondary.create', compact('teachersList'));
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
        TeachersHigherSecondaryEdu::create($higherSecondary);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeachersHigherSecondaryEdu  $teachersHigherSecondaryEdu
     * @return \Illuminate\Http\Response
     */
    public function show(TeachersHigherSecondaryEdu $teachersHigherSecondaryEdu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeachersHigherSecondaryEdu  $teachersHigherSecondaryEdu
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachersHigherSecondaryEdu $teachersHigherSecondaryEdu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeachersHigherSecondaryEdu  $teachersHigherSecondaryEdu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeachersHigherSecondaryEdu $teachersHigherSecondaryEdu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeachersHigherSecondaryEdu  $teachersHigherSecondaryEdu
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachersHigherSecondaryEdu $teachersHigherSecondaryEdu)
    {
        //
    }
}
