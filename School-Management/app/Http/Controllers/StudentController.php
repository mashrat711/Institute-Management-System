<?php

namespace App\Http\Controllers;

use App\ClassNew;
use App\Student;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students= Student::all();
        return view('Backend.admin.Student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = ClassNew::pluck('class', 'id');
        return view("Backend.admin.Student.create",compact('classes'));
        //dd($students);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        //dd($request->all());
        try
        {
            if($request->hasFile('photo')){
                $student_data=$request->all();

                $pictureName=time().'_'.$request->photo->getClientOriginalName();
                //$request->photo->move('images/student' , $photo);
                $request->photo->move('images/student' , $pictureName);
                $student_data['photo'] = $pictureName;

                Student::create($student_data);
                //dd($student_data);///
                return redirect()->route('student.index')->with('message','Data has been inserted successfully');

            }
            else{
                $student_data=$request->all();
                $student_data['photo']="picture didn't add";
                Student::create($student_data);
               return redirect()->route('student.index')->with('message','Data has been inserted successfully');
            }

        }
        catch(QueryException $e){
            return redirect()->route('student.create')->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('Backend.admin.Student.show', compact('student'));
 //dd($student);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //dd($student);
        return view('Backend.admin.Student.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //return "done";
       //$updateData=$request->all();
        //dd($updateData);
        //$student->update($updateData);

        try{
            $updateData=$request->all();
            //dd($updateData);
            $student->update($updateData);
            return redirect()->route('student.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('message', 'Data has been deleted successfully');
    }
}
