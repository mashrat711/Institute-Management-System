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
                                    <h5 class="m-b-10">Attendances</h5>

                                    <ul class="breadcrumb-title b-t-default p-t-10">
                                        <li class="breadcrumb-item">
                                            <a href=""> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Attendances</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">New Attendances</a>
                                        </li>
                                    </ul>
                                    {{--<a href="{{route('Secondary.create')}}">--}}
                                        {{--<button type="button" class="btn btn-success waves-effect m-b-10 float-right"--}}
                                                {{--data-target="#myModal">Add New</button>--}}
                                    {{--</a>--}}
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

                                                <form method="post" encType ="multipart/form-data" action="{{route('studentList')}}">
                                                    @csrf

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"> Select Class </label>
                                                            <div class="col-sm-2">
                                                                {{--{{dd($studentsList)}}--}}
<!--                                                                -->
                                                                <select name="class" id="">
                                                                    @foreach($classes as $key => $class)
                                                                        <option value="{{$key}}"> {{$class}}  </option>
                                                                    @endforeach
                                                                </select>

                                                                {{--<input type="hidden" name="name" value="{{$studentsList}}">--}}
                                                            </div>

                                                            <label class="col-sm-2 col-form-label"> Select Section </label>
                                                            <div class="col-sm-2">
                                                            {{--{{dd($studentsList)}}--}}
                                                            <!--                                                                -->
                                                                <select name="section" id="">
                                                                    @foreach($sections as $key => $section)
                                                                        <option value="{{$key}}"> {{$section}}  </option>
                                                                    @endforeach
                                                                </select>

                                                                {{--<input type="hidden" name="name" value="{{$studentsList}}">--}}
                                                            </div>
                                                        </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-info margin-top-20"><i class="fa fa-filter"></i> Entry Attendance</button>
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