<?php

namespace App\Http\Controllers;

use App\TrainingInstitute;
use Illuminate\Http\Request;

class TrainingInstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uni_courses=TrainingInstitute::all();
        return view('Backend.Institute.TrainingCentre.Courses.index',compact('uni_courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Institute.TrainingCentre.Courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        TrainingInstitute::create($data);
        return redirect()->route('TrainingInstitute.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrainingInstitute  $trainingInstitute
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingInstitute $trainingInstitute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainingInstitute  $trainingInstitute
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingInstitute $trainingInstitute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainingInstitute  $trainingInstitute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingInstitute $trainingInstitute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainingInstitute  $trainingInstitute
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingInstitute $trainingInstitute)
    {
        $trainingInstitute->delete();
        return redirect()->route('TrainingInstitute.index')->with('message', 'Data has been deleted successfully');
    }
}
