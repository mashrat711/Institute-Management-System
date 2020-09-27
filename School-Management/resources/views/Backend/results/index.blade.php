

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
                            <h5 class="m-b-10">Result</h5>


                            <a href="{{route('results.create')}}">
                                <button type="button" class="btn btn-success waves-effect m-b-10 float-right"
                                        data-target="#myModal">Add New </button>
                            </a>





                        </div>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger"> {{$error}} </div>
                            @endforeach
                        @endif

                    </div>

                    <!-- Page-header end -->



                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">

                                <!-- Individual Column Searching (Text Inputs) start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Exam table</h5>
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>Student</th>
                                                    <th>Exam</th>
                                                    <th>Teacher</th>
                                                    <th>Attendance</th>
                                                    <th>Grade</th>
                                                    <th>Score</th>
                                                    <th>Result</th>
                                                    <th>Action</th>

                                                </thead>
                                                <tbody>
                                                @foreach($results as $result)
                                                    <tr>
                                                        <td>{{$result->student->name}}</td>
                                                        <td>{{$result->exam->type}}</td>
                                                        <td>{{$result->teacher->name}}</td>
                                                        <td>{{$result->attendence}}</td>
                                                        <td>{{$result->grade}}</td>
                                                        <td>{{$result->score}}</td>
                                                        <td>{{$result->result}}</td>
                                                        {{--<td><span class="label label-primary">{{$class->status}}</span></td>--}}
                                                        <td>
                                                            {{--<div class="btn-group">--}}
                                                                {{--<a title="Details"  href='{{route('results.store')}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                            @can('result_change')
                                                            <div class="btn-group">
                                                                <a title="Edit" href="{{route('results.edit',$result->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                                                            </div>
                                                            <!-- todo: have problem in mobile device -->
                                                            <div class="btn-group">
                                                                <form  class="myAction" method="POST" action="{{route('results.destroy',$result->id)}}">
                                                                    @csrf
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                                        <i class="fa fa-fw fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                                @endcan

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

                                <!-- Individual Column Searching (Text Inputs) end -->
                            </div></div></div></div></div></div></div>
@endsection