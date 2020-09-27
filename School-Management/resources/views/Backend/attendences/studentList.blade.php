@extends('Backend.admin.master')
@section('student_content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Take Attendance</h5>
                            {{--<button type="button" class="btn btn-primary float-right" data-toggle="modal"  data-target="#exampleModal" >--}}
                            {{--Add New Teacher--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-success waves-effect m-b-10 float-right"  >--}}
                            {{--Add New Teacher</button>--}}
                            {{--<div class="box-tools pull-right">--}}
                                {{--<a class="btn btn-info btn-sm"--}}
                                   {{--href="{{ URL::route('student.create') }}">--}}
                                    {{--<i class="fa fa-plus-circle"></i> Add New</a>--}}
                            {{--</div>--}}
                            <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>




                        </div>
                    </div>
                    <!-- Page-header end -->
                    @if(session('message'))
                        <div class="alert alert-success"> {{session('message')}} </div>
                    @endif
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger"> {{$error}} </div>
                    @endforeach
                @endif

                <!-- Page-body start -->
                    <form action="{{route('attendences.store')}} " method="post">
                        @csrf
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label"> Selected Class </label>
                                                <div class="col-md-2">

                                                    <input type="text" class="form-control" name="class_id" value="{{$className}}" readonly>
                                                </div>
                                                {{--<div class="col-md-3">--}}
                                                {{--<input type="text" class="form-control" name="value="{{$section}}" readonly>--}}
                                                {{--</div>--}}
                                                <label class="col-sm-2 col-form-label"> Select Teacher </label>
                                                <div class="col-md-2">
                                                    <select name="teacher_id" id="">
                                                        @foreach($teachersList as $key=>$teacher)
                                                            <option value="{{$key}}">{{$teacher}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label class="col-sm-2 col-form-label"> Date </label>
                                                <div class="col-md-2">

                                                    <input type="date" class="form-control" name="date" value="" >
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- Zero config.table start -->

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Students List </h5>
                                        </div>
                                        <div class="card-block">

                                            <div class="dt-responsive table-responsive">

                                                <table id="datatable" class="table table-striped table-bordered nowrap">

                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Roll</th>
                                                        <th> Status </th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    <form method="post" action="{{route('studentAttendances.store')}}">
                                                        @csrf
                                                        @foreach($studentList as $key=>$student)
                                                            <tr>
                                                                <input type="hidden" name="student_id[]" value="{{$student->id}}">
                                                                <td>{{$student->id}}</td>
                                                                <td>{{$student->name}}</td>
                                                                <td>{{$student->roll}}</td>
                                                                <td>
                                                                    <input type="radio" id="present_{{$key}}" name="status[{{$student->id}}]" value="present">
                                                                    <label for="present_{{$key}}">Present</label>

                                                                    <input type="radio" id="absent_{{$key}}" name="status[{{$student->id}}]" value="absent">
                                                                    <label for="absent_{{$key}}">Absent</label>

                                                                    <input type="radio" id="sick_{{$key}}" name="status[{{$student->id}}]" value="sick">
                                                                    <label for="sick_{{$key}}">Sick</label>

                                                                    <input type="radio" id="leave_{{$key}}" name="status[{{$student->id}}]" value="leave">
                                                                    <label for="leave_{{$key}}">Leave</label>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </form>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Zero config.table end -->

                                </div>
                            </div>
                        </div></form>

                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">


            </div>
        </div>
    </div>



@endsection