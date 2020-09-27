<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Result;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $results=Result::with('exam' ,'student','teacher')->get();
       //$results=Exam::all();

        //dd($results);
        return view('Backend.results.index',compact('results'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students=Student::pluck('name', 'id');
        $teachersList = Teacher::pluck('name', 'id');
        $exams=Exam::pluck('type','id');
        return view('Backend.results.create',compact('students','teachersList','exams'));
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
       Result::create($data);
        return redirect()->route('results.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        $students=Student::pluck('name', 'id');
        $teachersList = Teacher::pluck('name', 'id');
        $exams=Exam::pluck('type','id');
        return view('Backend.results.edit',compact('students','teachersList','exams'))->with('result', $result);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $result->update($updateData);
            return redirect()->route('results.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $result->delete();
        return redirect()->route('results.index')->with('message', 'Data has been deleted successfully');
    }
}
