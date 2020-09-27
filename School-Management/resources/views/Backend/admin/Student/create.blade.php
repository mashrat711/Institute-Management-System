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
                                        <h5 class="m-b-10">New Student</h5>
                                        <p class="text-muted m-b-10">Student Information</p>
                                        <ul class="breadcrumb-title b-t-default p-t-10">
                                            <li class="breadcrumb-item">
                                                <a href=""> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="">New student</a>
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
                                            <form class="form-control-center" method="POST" encType ="multipart/form-data" action="{{route('student.store')}}">
                                                @csrf
                                                <div class="container">
                                                <h3>Student Info.</h3>
                                                <fieldset>
                                                    {{--<div class="form-group row">--}}
                                                        {{--<div class="col-sm-6">--}}
                                                        {{--{!! Form::label('title', 'Title:', ['class' => 'control-label col-sm-6 block']) !!}--}}
                                                    {{--{{Form::text("name",--}}
                                                        {{--old("name") ? old("name") : (!empty($student) ? $student->name : null),--}}
                                         {{--[--}}
                                                      {{--"class" => " col-sm-6 form-control ",--}}
                                                      {{--"id"=>"userName-2b",--}}
                                                     {{--"placeholder" => "Username",--}}
                                            {{--])--}}
{{--}}--}}
{{--</div>--}}
                                                        {{--<div class="col-sm-6">--}}
                                                            {{--{!! Form::label('title', 'Title:', ['class' => 'control-label col-sm-6 block']) !!}--}}
                                                            {{--{{Form::text("name",--}}
                                                                {{--old("name") ? old("name") : (!empty($student) ? $student->name : null),--}}
                                                 {{--[--}}
                                                              {{--"class" => " col-sm-6 form-control ",--}}
                                                              {{--"id"=>"userName-2b",--}}
                                                             {{--"placeholder" => "Username",--}}
                                                    {{--])--}}
        {{--}}--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}

                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for=""  class="block">Name </label>

                                                            <input id="userName-2b" name="name" type="text" class=" form-control"
                                                                   value="{{ old("name") ? old("name") : (!empty($student) ? $student->username : null) }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="email" name="email" class="block">Email</label>

                                                            <input id="userName-2b" name="email" type="text" class=" form-control">
                                                        </div>


                                                    <div class="form-group row">
                                                        <div class="col-sm-4">

                                                            <label for="userName-2" name="gender" class="block">Gender</label>
                                                            <input id="userName-2b" name="gender" type="text" class=" form-control">


                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="userName-2" class="block">Religion</label>

                                                            <input id="userName-2b" name="religion" type="text" class=" form-control">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="userName-2" class="block">Nationality</label>

                                                            <input id="userName-2b" name="nationality" type="text" class=" form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for="userName-2" class="block">Blood Group</label>

                                                            <input id="userName-2b" name="blood_group" type="text" class=" form-control">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="userName-2" class="block">Mobile</label>

                                                            <input id="userName-2b" name="mobile" type="number" class=" form-control">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="userName-2" class="block">Extra Curricular Activity</label>

                                                            <input id="userName-2b" name="extra Curricular Activity" type="text" class=" form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="exampleFormControlFile1">Photo:</label>
                                                            <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="email-2" class="block">Date of birth</label>

                                                            <input id="email-2b" name="dob" type="date" class=" form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-sm-4">
                                                            <label for="exampleFormControlTextarea1">Note:</label>
                                                            <textarea class="form-control"  name="note" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="exampleFormControlTextarea1">status:</label>
                                                            <textarea class="form-control"  name="status" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="exampleFormControlTextarea1">Extra:</label>
                                                            <textarea class="form-control"  name="extra" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                        </div>
                                                    </div>
</div>
                                                </fieldset>
                                                <h3> Guardian information </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Fathers Name</label>

                                                            <input id="" name="fathers name" type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="" class="block">Fathers Phone No</label>

                                                            <input id="name-2b" name="fathers phone_no" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Mothers Name</label>

                                                            <input id="name-2b" name="mothers name" type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Mothers Phone No</label>

                                                            <input id="name-2b" name="mothers phone_no" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Local Guardians Name</label>

                                                            <input id="name-2b" name="local guardian" type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Local Guardians Phone No</label>

                                                            <input id="name-2b" name="local guardians phone" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Permanent Address</label>

                                                            <textarea class="form-control" name="permanent_address" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="name-2" class="block">Present Address</label>

                                                            <textarea class="form-control" name="present address" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                        </div>
                                                    </div>


                                                </fieldset>
                                                <h3> Academic Info </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Class</label>
                                                            <select name="class" id="">
                                                                @foreach($classes as $key => $class)
                                                                    <option value="{{$key}}"> {{$class}}  </option>
                                                                @endforeach
                                                            </select>
                                                            {{--<input id="University-2b" name="class" type="text" --}}
                                                                   {{--class="form-control required">--}}
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Section</label>

                                                            <input id="University-2b" name="section" type="text" class="form-control required">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Roll</label>

                                                            <input id="University-2b" name="roll" type="text" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Shift</label>

                                                            <input id="University-2b" name="shift" type="text" class="form-control required">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Id_Card No</label>

                                                            <input id="University-2b" name="id_card_no" type="text" class="form-control required">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Reg No</label>

                                                            <input id="University-2b" name="registration no" type="text" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="Country-2" class="block">Board Reg No</label>

                                                            <input id="Country-2b" name="board_reg_no" type="text" class="form-control required">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="Country-2" class="block">Board Roll No</label>

                                                            <input id="Country-2b" name="board_roll_no" type="text" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">ID card No</label>

                                                            <input id="University-2b" name="id_card_no" type="text" class="form-control required">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Elective Or 4th Sub </label>

                                                            <input id="University-2b" name="optional_sub" type="text" class="form-control required">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="University-2" class="block">Group</label>

                                                            <input id="University-2b" name="group" type="text" class="form-control required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label for="datejoin" class="block">House No</label>

                                                            <input id="datejoinb" name="house_no" type="text" class="form-control required">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="datejoin" class="block">House Name</label>

                                                            <input id="datejoinb" name="house_name" type="text" class="form-control required">
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
                                                            <input id="Company-2b" name="user_name" type="text" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="CountryW-2" class="block">User Password:</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="CountryW-2b" name="password" type="text" class="form-control required">
                                                        </div>
                                                    </div>





                                                </fieldset>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
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



