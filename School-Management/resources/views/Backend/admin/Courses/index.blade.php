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


                            <a href="{{route('Course.create')}}">
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
                                        <h5>Course table</h5>
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Duration</th>
                                                    <th>Details</th>
                                                    <th>Remarks</th>
                                                     <th>Certificate</th>

                                                      <th>Status</th>
                                                      <th> Actions </th>


                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($courses as $course)
                                                    <tr>
                                                        <td>{{$course->id}}</td>
                                                        <td>{{$course->name}}</td>
                                                        <td>{{$course->duration}}</td>
                                                        <td>{{$course->details}}</td>
                                                        <td>{{$course->remark}}</td>
                                                        <th>{{$course->certificate}}</th>
                                                        {{--<td>{{$course->Sessions->level}}</td>--}}
                                                        <td>{{$course->status}}</td>


                                                        <td>
                                                            <div class="btn-group">
                                                                <a title="Details"  href='{{url("")}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>
                                                                </a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a title="Edit" href="{{url("Course/$course->id/edit")}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                                </a>
                                                            </div>
                                                            <!-- todo: have problem in mobile device -->
                                                            <div class="btn-group">
                                                                <form  class="myAction" method="POST" action="{{route('Course.destroy',$course->id)}}">
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