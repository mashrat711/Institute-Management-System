<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();



Route::group(['middleware' => ['auth']],function (){

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('users', 'UserController');

    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('posts', 'PostController');



    Route::get('create_role_permission',function (){
        $role =Role::create(['name' => 'Administer']);
        $permission = Permission::create(['name' => 'Administer and Permission']);
        auth()->user()->assignRole('Administer');
        auth()->user()->givePermissionTo('Administer and Permission');
    });
    Route::resource('student','StudentController');
//    Route::post('student','StudentController@create')->name('student.create');
    Route::resource('Notices','NoticeController');
    Route::resource('Teacher','TeacherController');
    Route::resource('Secondary','TeacherSecondaryEducationController');
    Route::resource('events','EventController');
    Route::resource('School','SchoolController');
    Route::resource('HigherSecondary','TeachersHigherSecondaryEduController');
    Route::resource('Graduation','TeacherGraduationInfoController');
    Route::resource('PostGraduation' ,'TeacherPostGraduationInfoController');
    Route::resource('Training','TeachersWorkshopController');
    Route::resource('College','CollegeController');
    Route::resource('University','UniversityController');
    Route::resource('TrainingInstitute','TrainingInstituteController');
    Route::resource('Schedule','ScheduleController');
    Route::resource('Course','CourseController');
    Route::resource('classes','ClassNewController');
    Route::resource('sessions','SessionController');
    Route::resource('studentsessions','StudentSessionController');
    Route::resource('attendences','AttendenceController');
    Route::resource('studentAttendances','StudentAttendanceController');
    Route::post('studentList','AttendenceController@studentList')->name('studentList');
    Route::resource('exams','ExamController');
    Route::resource('results','ResultController');
    Route::get('/dashboard', function () {
        return view('Backend.admin.dashboard-ecommerce');
    });

    Route::get('/Calender', function () {
        return view('Backend.Calendar.home');
    });

    Route::get('/e', function () {
        return view('Backend.admin.notices.edit');
    });Route::get('/s', function () {
        return view('Backend.Schedule.index');
    });
    Route::get('/TeacherEdu', function () {
        return view('Backend.admin.Teacher.Education.Info');
    });Route::get('/Take', function () {
        return view('Backend.take_attendances.index');
    });
    Route::get('/n', function () {
        return view('Backend.admin.notices.show');
    });
    Route::get('/Routine', function () {
        return view('Backend.Class Routine.index');
    });
});