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
                        <h5 class="m-b-10">Teachers Data</h5>


                        <a href="">
                            <button type="button" class="btn btn-success waves-effect m-b-10 float-right"
                                    data-target="#myModal">Add New Teacher</button>
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
                                                <th>#</th>
                                                <th>Name</th>
                                                <th class="notexport" width="10%">Photo</th>
<!--                                                <th>Teacher_id</th>-->
<!--                                                <th>Email</th>-->
<!--                                                <th>Phone</th>-->
<!--                                                <th>Designation</th>-->
                                                <th>Attendences</th>

                                                <th> Actions </th>


                                            </tr>
                                            </thead>

                                            <tbody>

                                            <tr>
                                                {{--<td>{{$teacher->id}}</td>--}}
                                                {{--<td>{{$teacher->name}}</td>--}}
                                                {{--<td><img class="d-flex align-self-center img-radius"--}}
                                                         {{--src='{{asset("images/teacher/$teacher->photo")}}' alt=""></td>--}}
                                                {{--<td><img class="d-flex align-self-center img-radius" src="../files/assets/images/user-profile/user-img.jpg" alt="Generic placeholder image"></td>--}}
                                                {{--<td>{{$teacher->teacher_id}}</td>--}}
                                                {{--<td>{{$teacher->email}}</td>--}}
                                                {{--<td>{{$teacher->phone}}</td>--}}
                                                {{--<td>{{$teacher->designation}}</td>--}}
                                                {{--<td>{{$teacher->teacherGraduationInfo->college_name}}</td>--}}
                                                {{--<td>--}}
                                                    {{--<a href=""><button class="btn btn-grd-info ">Education Info</button></a>--}}
                                                {{--</td>--}}

                                                {{--<td>--}}
                                                    {{--<div class="btn-group">--}}
                                                        {{--<a title="Details"  href="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>--}}
                                                        {{--</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="btn-group">--}}
                                                        {{--<a title="Edit" href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>--}}
                                                        {{--</a>--}}
                                                    {{--</div>--}}
                                                    {{--<!-- todo: have problem in mobile device -->--}}
                                                    {{--<div class="btn-group">--}}
                                                        {{--<form  class="myAction" method="POST" action="">--}}
                                                            {{--@csrf--}}
                                                            {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                            {{--<button type="submit" class="btn btn-danger btn-sm" title="Delete">--}}
                                                                {{--<i class="fa fa-fw fa-trash"></i>--}}
                                                            {{--</button>--}}
                                                        {{--</form>--}}
                                                    {{--</div>--}}

                                                {{--</td>--}}
                                            </tr>

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