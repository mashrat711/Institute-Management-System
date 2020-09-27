@extends('Backend.admin.master')
@section('student_create_content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10"> Students Form</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-user"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Students Form</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger"> {{$error}} </div>
                        @endforeach
                @endif

                <!-- Page-header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">



                                <div class="page-header card">
                                    <div class="card-block">
                                        {{--{!! Form::open(array('route' => 'student.store','method' => 'POST' , 'class'=>'form-control-center'))--}}
                                        {{--!!}--}}
                                        <form class="form-control-center" method='POST' encType ="multipart/form-data"
                                              action="{{url("student/$student->id")}}">
                                            @csrf
                                            @method('put')


                                            <div class="container">
                                                <h3>Student Info.</h3>
                                                <fieldset>


                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for=""  class="block">Name </label>

                                                            <input id="userName-2b" name="name" type="text" class=" form-control"
                                           value="{{ old("name") ? old("name") : (!empty($student) ? $student->name : null) }}">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="email" name="email" class="block">Email</label>

                                                            <input id="userName-2b" name="email" type="text" class=" form-control"value="{{ old("email") ? old("email") : (!empty($student) ? $student->email: null) }}">
                                                        </div>

                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-sm-4">

                                                                <label for="userName-2" name="gender" class="block">Gender</label>
                                                                <input id="userName-2b" name="gender" type="text" class=" form-control"  value="{{ old("gender") ? old("gender") : (!empty($student) ? $student->gender : null) }}">


                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="userName-2" class="block">Religion</label>

                                                                <input id="userName-2b" name="religion" type="text" class=" form-control"  value="{{ old("religion") ? old("religion") : (!empty($student) ? $student->religion: null) }}">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="userName-2" class="block">Nationality</label>

                                                                <input id="userName-2b" name="nationality" type="text" class=" form-control"
                                                                       value="{{ old("nationality") ? old("nationality") : (!empty($student) ? $student->nationality : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="userName-2" class="block">Blood Group</label>

                                                                <input id="userName-2b" name="blood_group" type="text" class=" form-control"
                                                                       value="{{ old("name") ? old("name") : (!empty($student) ? $student->name : null) }}">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="userName-2" class="block">Mobile</label>

                                                                <input id="userName-2b" name="mobile" type="number" class=" form-control"
                                                                       value="{{ old("mobile") ? old("mobile") : (!empty($student) ? $student->mobile : null) }}">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="userName-2" class="block">Extra Curricular Activity</label>

                                                                <input id="userName-2b" name="extra_Curricular_Activity" type="text" class=" form-control"
                                                                       value="{{ old("extra_Curricular_Activity") ? old("extra_Curricular_Activity") : (!empty($student) ? $student->extra_Curricular_Activity : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <label for="exampleFormControlFile1">Photo:</label>
                                                                <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1"
                                                                       value="{{ old("photo") ? old("photo") : (!empty($student) ? $student->photo : null) }}">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="email-2" class="block">Date of birth</label>

                                                                <input id="email-2b" name="dob" type="date" class=" form-control"
                                                                       value="{{ old("dob") ? old("dob") : (!empty($student) ? $student->dob : null) }}">
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">

                                                            <div class="col-sm-4">
                                                                <label for="exampleFormControlTextarea1">Note:</label>
                                                                <textarea class="form-control"  name="note" id="exampleFormControlTextarea1"
                                                                          value="{{ old("note") ? old("note") : (!empty($student) ? $student->note: null) }}"rows="2"></textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="exampleFormControlTextarea1">status:</label>
                                                                <textarea class="form-control"  name="status" id="exampleFormControlTextarea1" rows="2"
                                                                          value="{{ old("status") ? old("status") : (!empty($student) ? $student->status : null) }}"></textarea
                                                                >
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="exampleFormControlTextarea1">Extra:</label>
                                                                <textarea class="form-control"  name="extra" id="exampleFormControlTextarea1" rows="2"
                                                                          value="{{ old("extra") ? old("extra") : (!empty($student) ? $student->extra : null) }}"></textarea>
                                                            </div>
                                                        </div>

                                                </fieldset>
                                                <h3> Guardian information </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Fathers Name</label>

                                                            <input id="" name="fathers_name" type="text" class="form-control"
                                                   value="{{ old("fathers_name") ? old("fathers_name") : (!empty($student) ? $student->fathers_name : null) }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="" class="block">Fathers Phone No</label>

                                                            <input id="name-2b" name="fathers_phone_no" type="text" class="form-control"
                                                                   value="{{ old("fathers_phone_no") ? old("fathers_phone_no") : (!empty($student) ? $student->fathers_phone_no : null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Mothers Name</label>

                                                            <input id="name-2b" name="mothers name" type="text" class="form-control"
                                                                   value="{{ old("mothers_name") ? old("mothers_name") : (!empty($student) ? $student->mothers_name : null) }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Mothers Phone No</label>

                                                            <input id="name-2b" name="mothers phone_no" type="text" class="form-control"
                                                                   value="{{ old("mothers_phone_no") ? old("mothers_phone_no") : (!empty($student) ? $student->mothers_phone_no : null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Local Guardians Name</label>

                                                            <input id="name-2b" name="local_guardian" type="text" class="form-control"
                                                                   value="{{ old("local_guardian") ? old("local_guardian") : (!empty($student) ? $student->local_guardian : null) }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Local Guardians Phone No</label>

                                                            <input id="name-2b" name="local_guardians_phone" type="text" class="form-control"
                                           value="{{ old("local_guardians_phone") ? old("local_guardians_phone") : (!empty($student) ? $student->local_guardians_phone : null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Permanent Address</label>

                                                            <textarea class="form-control" name="permanent_address" id="exampleFormControlTextarea1" rows="2"
                                                                      value="{{ old("permanent_address") ? old("permanent_address") : (!empty($student) ? $student->permanent_address : null) }}"></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Present Address</label>

                                                            <textarea class="form-control" name="present_address" id="exampleFormControlTextarea1" rows="2"
                                      value="{{ old("present_address") ? old("present_address") : (!empty($student) ? $student->present_address : null) }}"></textarea>
                                                        </div>
                                                    </div>


                                                </fieldset>
                                                <h3> Academic Info </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Class</label>

                                                            <input id="University-2b" name="class" type="text" class="form-control required"
                                                                   value="{{ old("class") ? old("class") : (!empty($student) ? $student->class : null) }}">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Section</label>

                                                            <input id="University-2b" name="section" type="text" class="form-control required"
                                                                   value="{{ old("section") ? old("section") : (!empty($student) ? $student->section : null) }}">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Roll</label>

                                                            <input id="University-2b" name="roll" type="text" class="form-control required"
                                                                   value="{{ old("roll") ? old("roll") : (!empty($student) ? $student->roll : null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Shift</label>

                                                            <input id="University-2b" name="shift" type="text" class="form-control required"
                                                                   value="{{ old("shift") ? old("shift") : (!empty($student) ? $student->shift : null) }}">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Id_Card No</label>

                                                            <input id="University-2b" name="id_card_no" type="text" class="form-control required"
                                                   value="{{ old("id_card_no") ? old("id_card_no") : (!empty($student) ? $student->id_card_no : null) }}">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Reg No</label>

                                                            <input id="University-2b" name="registration no" type="text" class="form-control required"
                                                                   value="{{ old("registration_no") ? old("registration_no") : (!empty($student) ? $student->registration_no : null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="Country-2" class="block">Board Reg No</label>

                                                            <input id="Country-2b" name="board_reg_no" type="text" class="form-control required"
                                                                   value="{{ old("board_reg_no") ? old("board_reg_no") : (!empty($student) ? $student->board_reg_no : null) }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="Country-2" class="block">Board Roll No</label>

                                                            <input id="Country-2b" name="board_roll_no" type="text" class="form-control required"
                                                                   value="{{ old("board_roll_no") ? old("board_roll_no") : (!empty($student) ? $student->board_roll_no : null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">ID card No</label>

                                                            <input id="University-2b" name="id_card_no" type="text" class="form-control required"
                                                                   value="{{ old("id_card_no") ? old("id_card_no") : (!empty($student) ? $student->id_card_no : null) }}">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Elective Or 4th Sub </label>

                                                            <input id="University-2b" name="optional_sub" type="text" class="form-control required"
                                                                   value="{{ old("optional_sub") ? old("optional_sub") : (!empty($student) ? $student->optional_sub: null) }}">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Group</label>

                                                            <input id="University-2b" name="group" type="text" class="form-control required"
                                                                   value="{{ old("Group") ? old("Group") : (!empty($student) ? $student->Group : null) }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="datejoin" class="block">House No</label>

                                                            <input id="datejoinb" name="house_no" type="text" class="form-control required"
                                                                   value="{{ old("house_no") ? old("house_no") : (!empty($student) ? $student->house_no : null) }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="datejoin" class="block">House Name</label>

                                                            <input id="datejoinb" name="house_name" type="text" class="form-control required"
                                                                   value="{{ old("house_name") ? old("house_name") : (!empty($student) ? $student->house_name : null) }}">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <h3> Access Info </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="Company-2" class="block">User Name:</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="Company-2b" name="user_name" type="text" class="form-control required"
                                                                   value="{{ old("user_name") ? old("user_name") : (!empty($student) ? $student->user_name : null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="CountryW-2" class="block">User Password:</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="CountryW-2b" name="password" type="text" class="form-control required"
                                                                   value="{{ old("password") ? old("password") : (!empty($student) ? $student->password : null) }}">
                                                        </div>
                                                    </div>





                                                </fieldset>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">update</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->

                    <div id="styleSelector">

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection



