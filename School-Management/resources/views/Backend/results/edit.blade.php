@extends('Backend.admin.master')
@section('dashboard')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Result Data</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Create results</a>
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
                                        <form action="{{url("results/$result->id")}}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Student Name</label>
                                                    <select name="student_id" id="">
                                                        @foreach($students as $key => $student)
                                                            <option value="{{$key}}"> {{$student}}  </option>
                                                        @endforeach
                                                    </select> >
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Attendance</label>

                                                    <input id="userName-2b" name="attendance" type="text" class=" form-control"
                                                           value="{{ old("attendance") ? old("attendance") : (!empty($result) ? $result->attendance: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Result</label>

                                                    <input id="userName-2b" name="result" type="text" class=" form-control"
                                                           value="{{ old("result") ? old("result") : (!empty($result) ? $result->result : null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Grade</label>

                                                    <input id="userName-2b" name="grade" type="text" class=" form-control"
                                                           value="{{ old("grade") ? old("grade") : (!empty($result) ? $result->grade : null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Remark</label>

                                                    <input id="userName-2b" name="remark" type="text" class=" form-control"
                                                           value="{{ old("remark") ? old("remark") : (!empty($result) ? $result->remark : null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Status</label>

                                                    <input id="userName-2b" name="status" type="text" class=" form-control"
                                                           value="{{ old("status") ? old("status") : (!empty($result) ? $result->status: null) }}">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Teacher</label>
                                                    <select name="teacher_id" id="">
                                                        @foreach($teachersList as $key => $teacher)
                                                            <option value="{{$key}}"> {{$teacher}}  </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Exam</label>
                                                    <select name="exam_id" id="">
                                                        @foreach($exams as $key => $exam)
                                                            <option value="{{$key}}"> {{$exam}}  </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <button type="submit">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection