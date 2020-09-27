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
                            <h5 class="m-b-10">Class Data</h5>


                            <a href="{{route('classes.create')}}">
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
        <h5>Individual Column Searching (Text Inputs)</h5>
        <span>The searching functionality that is provided by DataTables is very useful for quickly search through the information in the table - however the search is global, and you may wish to present controls to search on specific columns only. DataTables has the ability to apply searching to a specific column through the column().search() method (note that the name of the method is search not filter since filter() is used to apply a filter to a result set).</span>
    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="footer-search" class="table table-striped table-bordered nowrap">
                <thead>
                <tr>
                    <th>Class</th>
                    <th>Date</th>
                    <th>TimeStart</th>
                    <th>Time End</th>
                    <th>Room No</th>
                    <th>Subject</th>
                    <th>Teacher Id</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($classes as $class)
                <tr>
                    <td>{{$class->class}}</td>
                    <td>{{$class->date}}</td>
                    <td>{{$class->timeStart}}</td>
                    <td>{{$class->timeEnd}}</td>
                    <td>{{$class->roomNo}}</td>
                    <td>{{$class->subject}}</td>
                    <td>{{$class->teacher_id}}</td>
                    <td><span class="label label-primary">{{$class->status}}</span></td>
                    <td>

                        <div class="btn-group">
                            <a title="Edit" href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                        </div>
                        <!-- todo: have problem in mobile device -->
                        <div class="btn-group">
                            <form  class="myAction" method="POST" action="{{route('classes.destroy',$class->id)}}">
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
<!-- Individual Column Searching (Text Inputs) end -->
                                </div></div></div></div></div></div></div>
                                @endsection