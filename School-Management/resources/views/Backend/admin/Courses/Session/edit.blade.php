@extends('Backend.admin.master')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">College Data</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Create courses</a>
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
                                        <form action="{{url("sessions/$session->id")}}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Session </label>

                                                    <input id="userName-2b" name="session" type="text" class=" form-control"
                                                           value="{{ old("session") ? old("session") : (!empty($session) ? $session->session : null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">level </label>

                                                    <input id="userName-2b" name="level" type="text" class=" form-control"
                                                           value="{{ old("level") ? old("level") : (!empty($session) ? $session->level : null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Section</label>

                                                    <input id="userName-2b" name="section" type="text" class=" form-control"
                                                           value="{{ old("section") ? old("section") : (!empty($session) ? $session->section : null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Group </label>

                                                    <input id="userName-2b" name="group" type="text" class=" form-control"
                                                           value="{{ old("group") ? old("group") : (!empty($session) ? $session->group : null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Remark</label>

                                                    <input id="userName-2b" name="remark" type="text" class=" form-control"
                                                           value="{{ old("remark") ? old("remark") : (!empty($session) ? $session->remark : null) }}">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Course</label>
                                                    <select name="course_id" id="">
                                                        @foreach($courses as $key => $course)
                                                            <option value="{{$key}}"> {{$course}}  </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <button type="submit">update</button>

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














