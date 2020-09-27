<?php

namespace App\Http\Controllers;

use App\Attendence;
use App\Student_Attendance;
use Illuminate\Http\Request;

class StudentAttendanceController extends Controller
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
//        $classes = ClassNew::pluck('class', 'id');
//        // $classrooms = ClassNew::pluck('class', 'id');
//        // dd($classes);
//        $sections=Student::pluck('section', 'id');
//        $teachersList=Teacher::pluck('name', 'id');
//        //dd($studentsList);
        //return view('Backend.attendences.studentAttendances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $attendanceRecord =$request->all();
//
//        $studentRecord =Attendence::foreach($request->attendence_id as $id){
//
//        create(
//            [
//                'attendence_id'=>$id,
//                'student_id'=>$id,
//                'status'
//
//            ]);
    }
//        $Users = $request->except('_token', 'date', 'department_id', 'batch', 'datatable_length');
//
//        foreach ($Users as $ID => $Status) {
//            $Attendance[] = [
//                'user_id' => $ID,
//                'department_id' => $request->department_id,
//                'date' => Carbon::parse($request->date),
//                'attendance' => $Status,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
//            ];
//        }
        //return redirect()->route('Teacher.index')->with('message','Data has been inserted successfully');
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Student_Attendance  $student_Attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Student_Attendance $student_Attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student_Attendance  $student_Attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Student_Attendance $student_Attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student_Attendance  $student_Attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student_Attendance $student_Attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student_Attendance  $student_Attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student_Attendance $student_Attendance)
    {
        //
    }
}
