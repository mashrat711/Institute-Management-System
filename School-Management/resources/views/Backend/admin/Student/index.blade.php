@extends('Backend.admin.master')
@section('student_content')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header card">
                                    <div class="card-block">
                                        <h5 class="m-b-10">Students Data</h5>
                                        {{--<button type="button" class="btn btn-primary float-right" data-toggle="modal"  data-target="#exampleModal" >--}}
                                           {{--Add New Teacher--}}
                                        {{--</button>--}}
                                        {{--<button type="button" class="btn btn-success waves-effect m-b-10 float-right"  >--}}
                                            {{--Add New Teacher</button>--}}
                                        <div class="box-tools pull-right">
                                            <a class="btn btn-info btn-sm"
                                               href="{{ URL::route('student.create') }}">
                                                <i class="fa fa-plus-circle"></i> Add New</a>
                                        </div>
                                        <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>




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
                                                    <h5>Students table</h5>
                                                    <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th class="notexport" width="10%">Photo</th>
                                                                <th>Email</th>
                                                                <th>Roll</th>
                                                                <th>Class</th>
                                                                <th>Section</th>
                                                                <th> Actions </th>


                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($students as $student)
                                                                <tr>
                                                                    <td>{{$student->id}}</td>
                                                                    <td>{{$student->name}}</td>
                                                                    {{--<td><img class="d-flex align-self-center img-radius"--}}
                                                                             {{--src='{{asset('images/student/$student->photo')}}'--}}

                                                                           {{--></td>--}}
                                                                    {{--<td><img src="<?php echo asset("storage/$student->photo")?>"--}}

                                                                        {{--></td>--}}
        <td><img class="d-flex align-self-center img-radius"
                 src='{{asset("images/student/$student->photo")}}' alt=""></td>
                                                                    {{--<td>{{$student->photo}}</td>--}}
                                                                    <td>{{$student->email}}</td>
                                                                    <td>{{$student->roll}}</td>
                                                                    <td>{{$student->class}}</td>
                                                                    <td>{{$student->section}}</td>

                                                                    <td>
                                                                        @can('student_show')
                                                                        <div class="btn-group">
                                                                            <a title="Details"
                                                                               href="{{route('student.show', $student->id)}}"  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>
                                                                            </a>
                                                                        </div>
                                                                        @endcan
                                                                        @can('student_edit')
                                                                        <div class="btn-group">
                                                                            <a title="Edit" href="{{route('student.edit', $student->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                                            </a>
                                                                        </div>
                                                                            @endcan
                                                                        {{--<div class="btn-group">--}}
                                                                            {{--<a title="delete" method="delete" href="{{route('student.destroy',$student->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>--}}
                                                                            {{--</a>--}}
                                                                        {{--</div>--}}

                                                                        <!-- todo: have problem in mobile device -->
                                                                            @can('studentDel')
                                                                        <div class="btn-group">
                                                                            <form  class="myAction" method="POST" action="{{route('student.destroy',$student->id)}}">
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