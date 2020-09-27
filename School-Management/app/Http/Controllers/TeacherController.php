<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\TeacherGraduationInfo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(TeacherGraduationInfo::all());
        $teachers=Teacher::with('teacherSecondaries')->get();
        //$teachers=Teacher::with('teacherSecondary')->get();
        
        //dd($teachers);
        return view('Backend.admin.Teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.admin.Teacher.add');
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
                $teacher_data=$request->all();

                $pictureName=time().'name'.'_'.$request->photo->getClientOriginalName();
                $request->photo->move('images/teacher' , $pictureName);
                $teacher_data['photo'] = $pictureName;
                Teacher::create($teacher_data);
                return redirect()->route('Teacher.index')->with('message','Data has been inserted successfully');

            }
            else{
                $teacher_data=$request->all();
                $teacher_data['photo']="picture didn't add";
                Teacher::create($teacher_data);
                return redirect()->route('Teacher.index')->with('message','Data has been inserted successfully');
            }

        }
        catch(QueryException $e){
            return redirect()->route('Teacher.create')->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show( $teacher)
    {
        //dd($teacher);
        $teacher=Teacher::with('teacherSecondaries','TeacherWorkshops')->where('id', $teacher)->first();
        //dd($teacher);
         return view('Backend.admin.Teacher.show', compact('teacher'));
        //dd($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($teacher)
    {
        $teacher=Teacher::with('teacherSecondaries','TeacherWorkshops')->where('id', $teacher)->first();
        //dd($teacher);
        return view('Backend.admin.Teacher.edit')->with('teacher', $teacher);
    }

    
//    Teacher (Model) - need to create with -a
//    TeacherController (controller) - auto
//    teachers (table name) - auto
//    teachers (route name)
//    teachers (folder/directory name)
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {

        try{

            //$teacher=Teacher::with('teacherSecondaries','TeacherWorkshops')->where('id', $teacher)->first();

            $updateData=$request->all();
            //dd($updateData);
            $teacher->update($updateData);
            return redirect()->route('Teacher.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($teacher)
    {
        $teacher=Teacher::with('teacherSecondaries')->where('id', $teacher)->first();
        $teacher->delete();
        return redirect()->route('Teacher.index')->with('message', 'Data has been deleted successfully');
    }
}
