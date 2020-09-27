@extends('Backend.admin.master')
@section('dashboard')

    <!-- Sidebar inner chat end-->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- Main-body start -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- Page-header start -->
                            <div class="page-header card">
                                <div class="card-block">
                                    <h5 class="m-b-10">Teachers Form</h5>

                                    <ul class="breadcrumb-title b-t-default p-t-10">
                                        <li class="breadcrumb-item">
                                            <a href=""> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Teachers</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Education Data</a>
                                        </li>
                                    </ul>
                                    <a href="{{route('Secondary.create')}}">
                                        <button type="button" class="btn btn-success waves-effect m-b-10 float-right"
                                                data-target="#myModal">Add New</button>
                                    </a>
                                </div>
                            </div>
                            <!-- Page-header end -->

                            <!-- Page body start -->
                            <div class="page-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- Basic Form Inputs card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                {{--<h5>Teachers Personal</h5>--}}

                                            </div>
                                            <div class="card-block">

                                                <h4 class="sub-title">Education Info</h4>

                                                <form method="post" encType ="multipart/form-data" action="{{route('Secondary.store')}}">
                                                    @csrf

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"> Select Teacher </label>
                                                            <div class="col-sm-8">
                                                                {{--{{dd($teachersList)}}--}}
                                                                <select name="teacher_id" id="">
                                                                    @foreach($teachersList as $key => $teacher)
                                                                        <option value="{{$key}}"> {{$teacher}}  </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Institute Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="school_name" class="form-control" value="{{ old("school_name") ? old("school_name") : null  }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">District</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="district" class="form-control"
                                                                       placeholder=""
                                                                       value="{{ old("district") ? old("district") :  null }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Education System</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="educational_system" class="form-control"
                                                                       placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Name of Exam</label>
                                                            <div class="col-sm-8">

                                                                <input type="text" class="form-control"  name="name_of_exam"
                                                                       placeholder=""
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Board Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                       name="board_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Passing Year</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                       name="passing_year"
                                                                       >
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Gpa</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                       name="gpa"
                                                                       >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Point</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                       name="point"
                                                                       >
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">group</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="group" class="form-control"
                                                                       >
                                                            </div>
                                                        </div>

                                                    <div class="form-group row">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>


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




@endsection