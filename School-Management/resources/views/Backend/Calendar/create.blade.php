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
                            <h5 class="m-b-10">New Event</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Create Event</a>
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
                                        <form action="{{route('events.store')}}" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Title </label>

                                                    <input id="userName-2b" name="title" type="text" class=" form-control"
                                                             >
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">start Date: </label>

                                                    <input id="userName-2b" name="start_date" type="date" class=" form-control"
                                                          >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">End Date: </label>

                                                    <input id="userName-2b" name="end_date" type="date" class=" form-control"
                                                    >
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Color</label>

                                                    <input id="userName-2b" name="color" type="color" class=" form-control"
                                                          >
                                                </div>
                                            </div>
                                            {{--<div class="form-group row">--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<label for=""  class="block">Remark</label>--}}

                                                    {{--<input id="userName-2b" name="remark" type="text" class=" form-control"--}}
                                                           {{-->--}}
                                                {{--</div>--}}

                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<label for=""  class="block">Course</label>--}}
                                                    {{--<select name="course_id" id="">--}}
                                                        {{--@foreach($courses as $key => $course)--}}
                                                            {{--<option value="{{$key}}"> {{$course}}  </option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}

                                            {{--</div>--}}
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