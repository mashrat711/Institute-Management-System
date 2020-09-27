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
                            <h5 class="m-b-10">Attendances</h5>


                            <a href="{{route('attendences.create')}}">
                                <button type="button" class="btn btn-success waves-effect m-b-10 float-right"
                                        data-target="#myModal">Take New Attendance</button>
                            </a>





                        </div>
                    </div>
                    <!-- Page-header end -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="text-success" align="center">{{date("d/m/y")}}</h5>






                        </div>
                    </div>

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
                                        <h5>Attendances</h5>

                                        {{--<br>--}}
                                        {{--<h3 class="text-success" align="center">{{date("d/m/y")}}</h3>--}}
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">

                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    {{--<th>#</th>--}}
                                                    <th>Student Name</th>
                                                    <th>Class</th>
                                                    <th>Date</th>
                                                    <th>Teacher Name</th>

                                                    <th>Attendance</th>

                                                    {{--<th> Actions </th>--}}


                                                </tr>
                                                </thead>

                                                <tbody>

                                                <tr>
                                                    @foreach( $attendences as $row)
                                                        {{--<td>{{$row->id}}</td>--}}
                                                        <td>{{$row->studentName}}</td>
                                                        <td>{{$row->class}}</td>
                                                        <td>{{$row->date}}</td>
                                                        <td>{{$row->teacherName}}</td>
                                                        <td><span class="label label-info">{{$row->status}}</span></td>


                                                    <td>
                                                    {{--<div class="btn-group">--}}
                                                    {{--<a title="Details"  href="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>--}}
                                                    {{--</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="btn-group">--}}
                                                    {{--<a title="Edit" href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>--}}
                                                    {{--</a>--}}
                                                    {{--</div>--}}
                                                    <!-- todo: have problem in mobile device -->
                                                    {{--<div class="btn-group">--}}
                                                    {{--<form  class="myAction" method="POST" action="{{route('attendences.destroy',$attendences->id)}}">--}}
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