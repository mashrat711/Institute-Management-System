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


                                        <a href="{{route('Teacher.create')}}">
                                            <button type="button" class="btn btn-success waves-effect m-b-10 float-right"
                                                    data-target="#myModal">Add New Teacher</button>
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
                                                    <h5>Teachers table</h5>
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
                                                                <th>Teacher_id</th>
                                                                <th>Email</th>
                                                                <th>Phone</th>
                                                                <th>Designation</th>
                                                                <th>Education</th>

                                                                <th> Actions </th>


                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            @foreach($teachers as $teacher)
                                                            <tr>
                                                                <td>{{$teacher->id}}</td>
                                                                <td>{{$teacher->name}}</td>
                                                                <td><img class="d-flex align-self-center img-radius"
                                                                         src='{{asset("images/teacher/$teacher->photo")}}' alt=""></td>
                                                                {{--<td><img class="d-flex align-self-center img-radius" src="../files/assets/images/user-profile/user-img.jpg" alt="Generic placeholder image"></td>--}}
                                                                <td>{{$teacher->teacher_id}}</td>
                                                                <td>{{$teacher->email}}</td>
                                                                <td>{{$teacher->phone}}</td>
                                                                <td>{{$teacher->designation}}</td>
                                                                {{--<td>{{$teacher->teacherGraduationInfo->college_name}}</td>--}}
<td>
    <a href="/TeacherEdu"><button class="btn btn-grd-info ">Education Info</button></a>
</td>

                                                                <td>
                                                                    @can('teacher_show')
                                                                    <div class="btn-group">

                                                                        <a title="Details"  href='{{url("Teacher/$teacher->id")}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>
                                                                        </a>

                                                                    </div>
                                                                    @endcan
                                                                    @can('teacher_edit')
                                                                    <div class="btn-group">
                                                                        <a title="Edit" href="{{route('Teacher.edit',$teacher->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                                        </a>
                                                                    </div>
                                                                    @endcan
                                                                    <!-- todo: have problem in mobile device -->
                                                                    <div class="btn-group">
                                                                        <form  class="myAction" method="POST" action="{{route('Teacher.destroy',$teacher->id)}}">
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