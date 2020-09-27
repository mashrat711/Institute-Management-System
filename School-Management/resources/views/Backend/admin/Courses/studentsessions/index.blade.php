@extends('Backend.admin.master')
@section('teacher')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Courses</h5>


                            <a href="{{route('studentsessions.create')}}">
                                <button type="button" class="btn btn-success waves-effect m-b-10 float-right"
                                        data-target="#myModal">Add New</button>
                            </a>





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
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Zero config.table start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Session table</h5>
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Session id</th>


                                                    <th>Status</th>
                                                    <th> Actions </th>


                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($student_sessions as $session)
                                                    <tr>
                                                        <td>{{$session->id}}</td>
                                                        <td>{{$session->session_id}}</td>
                                                       <td>{{$session->status}}</td>
                                                        <td>{{$session->sessions}}</td>



                                                        <td>
                                                            {{--<div class="btn-group">--}}
                                                                {{--<a title="Details"  href='{{url("")}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="btn-group">--}}
                                                                {{--<a title="Edit" href="{{url("")}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                            {{--<!-- todo: have problem in mobile device -->--}}
                                                            {{--<div class="btn-group">--}}
                                                                {{--<form  class="myAction" method="POST" action="{{route('')}}">--}}
                                                                    {{--@csrf--}}
                                                                    {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                                    {{--<button type="submit" class="btn btn-danger btn-sm" title="Delete">--}}
                                                                        {{--<i class="fa fa-fw fa-trash"></i>--}}
                                                                    {{--</button>--}}
                                                                {{--</form>--}}
                                                            {{--</div>--}}

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>
                                            {{--@foreach($teacher= $TeacherGraduationInfos as $row)--}}
                                            {{--<h1>{{$row->country}}</h1>--}}
                                            {{--@endforeach--}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Zero config.table end -->

                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>




@endsection