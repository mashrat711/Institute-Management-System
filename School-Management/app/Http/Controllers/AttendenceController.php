<?php

namespace App\Http\Controllers;

use App\Attendence;
use App\ClassNew;
use App\Result;
use App\Student;
use App\Student_Attendance;
use App\Teacher;
use Illuminate\Http\Request;
use DB;
class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $attendences=Attendence::with('student','teacher')->get();
//        dd($attendences);
        //$status=Student_Attendance::with('attendance')->get();
        //dd($status);
        $attendences=Attendence::
        join('student__attendances','student__attendances.attendence_id','attendences.id')
            ->join('teachers','attendences.teacher_id','teachers.id')

            ->join('students','student__attendances.student_id','students.id')

            ->join('class_news','attendences.class_id','class_news.id')

            ->select('class_news.class','teachers.name as teacherName','attendences.date','student__attendances.status','students.name as studentName')

            ->get();
        //dd($attendences);
        return view('Backend.attendences.index', compact('attendences'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = ClassNew::pluck('class', 'id');
        $sections=Student::pluck('section', 'section');

        return view('Backend.attendences.create',compact('classes','teachersList','sections'));

   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $parentData = $request->only('class_id', 'teacher_id', 'date');
        $attendance_id = Attendence::create($parentData);

        foreach ($request->status as $key => $status){
            Student_Attendance::create([
                'attendence_id' => $attendance_id->id,
                'student_id' => $key,
                'status' => $status,

            ]);

        }

       // $child_data=Attendence::where('student_id','=',id)->get();
      return redirect()->route('attendences.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(Attendence $attendence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendence $attendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendence $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendence $attendence)
    {
        $attendence->delete();
        return redirect()->route('attendences.index')->with('message', 'Data has been deleted successfully');

    }
    public function studentList( Request $request){
        $className = $request->class;
         $studentList = Student::where('class', $request->class)->get();
          //dd($studentList);
        $teachersList=Teacher::pluck('name', 'id');
        return view('Backend.attendences.studentList',compact('studentList', 'className', 'teachersList'));

    }
}
