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
                            <h5 class="m-b-10">Class Schedule</h5>


                            <a href="{{route('Schedule.create')}}">
                                <button type="button" class="btn btn-success waves-effect m-b-10 float-right"
                                        data-target="#myModal">Add New </button>
                            </a>





                        </div>
                    </div>
                    <!-- Page-header end -->


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
                                        <h5>Students table</h5>
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Class</th>
                                                    <th>Class Id</th>
                                                    <th>Day</th>
                                                    <th>Start time</th>
                                                    <th>End Time</th>
                                                    {{--<th>teacher id</th>--}}
                                                    <th>Room id</th>
                                                    <th>Category</th>
                                                    <th>Subject</th>
                                                    {{--<th>details</th>--}}
                                                    <th>remarks</th>
                                                    <th>Status</th>
                                                    <th>Action</th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($schedules as $row)
                                                    <tr>
                                                        <td>{{$row->id}}</td>
                                                        <td>{{$row->class_name}}</td>
                                                        <td>{{$row->class_id}}</td>
                                                        <td>{{$row->day}}</td>
                                                        <td>{{$row->start_time}}</td>
                                                        <td>{{$row->end_time}}</td>
                                                        {{--<td>{{$row->teacher_id}}</td>--}}
                                                        <td>{{$row->room_id}}</td>
                                                        <td>{{$row->category}}</td>
                                                        <td>{{$row->subject}}</td>
                                                        {{--<td>{{$row->details}}</td>--}}
                                                        <td>{{$row->remarks}}</td>
                                                        <td>
                                                            <!-- todo: have problem in mobile device -->
                                                            <input class="statusChange" type="checkbox" data-pk="{{$row->id}}" @if($row->status) checked @endif data-toggle="toggle" data-on="<i class='fa fa-check-circle'></i>" data-off="<i class='fa fa-ban'></i>" data-onstyle="success" data-offstyle="danger">
                                                        </td>

                                                        <td>
                                                            {{--<div class="btn-group">--}}
                                                                {{--<a title="Details"--}}
                                                                   {{--href="{{route('Schedule.show', $row->id)}}"  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                            <div class="btn-group">
                                                                <a title="Edit" href="{{route('Schedule.edit', $row->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                                </a>
                                                            </div>
                                                        {{--<div class="btn-group">--}}
                                                        {{--<a title="delete" method="delete" href="{{route('student.destroy',$student->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>--}}
                                                        {{--</a>--}}
                                                        {{--</div>--}}

                                                        <!-- todo: have problem in mobile device -->
                                                            <div class="btn-group">
                                                                <form  class="myAction" method="POST" action="{{route('Schedule.destroy',$row->id)}}">
                                                                    @csrf
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                                        <i class="fa fa-fw fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Zero config.table end -->

                            </div>
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





@endsection