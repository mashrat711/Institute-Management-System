<?php

namespace App\Http\Controllers;

use App\ClassNew;
use App\Session;
use App\Teacher;
use Illuminate\Http\Request;

class ClassNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes=ClassNew::all();
        return view('Backend.admin.Courses.Classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachersList = Teacher::pluck('name', 'id');
        $sessions = Session::pluck('session', 'id');
        return view('Backend.admin.Courses.Classes.create',compact('classes','sessions','teachersList'));
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
        ClassNew::create($data);
        return redirect()->route('classes.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassNew  $classNew
     * @return \Illuminate\Http\Response
     */
    public function show(ClassNew $classNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassNew  $classNew
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassNew $classNew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassNew  $classNew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassNew $classNew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassNew  $classNew
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassNew $classNew)
    {
        $classNew=ClassNew::where('id', $classNew->first());
        $classNew->delete();
        //dd($classNew);
        return redirect()->route('classes.index')->with('message', 'Data has been deleted successfully');
    }
}
