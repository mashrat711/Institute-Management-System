@extends('Backend.admin.master')
@section('content')

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
                                    <h5 class="m-b-10">Workshop & Training</h5>

                                    <ul class="breadcrumb-title b-t-default p-t-10">
                                        <li class="breadcrumb-item">
                                            <a href=""> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Teachers</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Education Data</a>
                                        </li>
                                    </ul>
                                    <a href="{{route('Training.create')}}">
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

                                                <h4 class="sub-title">Workshop & Training</h4>

                                                <form method="post" encType ="multipart/form-data" action="{{route('Training.store')}}">
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
                                                        <label class="col-sm-2 col-form-label">Title</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="title" class="form-control" value="{{ old("school_name") ? old("school_name") : null  }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Trainer</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="trainer" class="form-control"
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Duration</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="duration" class="form-control"
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Description</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"  name="description"
                                                                   placeholder=""
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