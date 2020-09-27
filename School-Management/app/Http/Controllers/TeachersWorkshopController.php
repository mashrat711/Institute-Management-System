<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\TeachersWorkshop;
use Illuminate\Http\Request;

class TeachersWorkshopController extends Controller
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
        $teachersList =Teacher::pluck('name', 'id');
        //dd($teachersList);
        return view('Backend.admin.Teacher.Education.Workshop.create', compact('teachersList'));
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
       TeachersWorkshop::create($post);
        return redirect()->route('Teacher.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeachersWorkshop  $teachersWorkshop
     * @return \Illuminate\Http\Response
     */
    public function show(TeachersWorkshop $teachersWorkshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeachersWorkshop  $teachersWorkshop
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachersWorkshop $teachersWorkshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeachersWorkshop  $teachersWorkshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeachersWorkshop $teachersWorkshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeachersWorkshop  $teachersWorkshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachersWorkshop $teachersWorkshop)
    {
        //
    }
}
