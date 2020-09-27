@extends('Backend.admin.master')
@section('dashboard')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header card">
                                    <div class="card-block">
                                        <h5 class="m-b-10">Teacher Profile</h5>
                                        <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <ul class="breadcrumb-title b-t-default p-t-10">
                                            <li class="breadcrumb-item">
                                                <a href=""> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Teacher</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Teacher Profile</a>
                                            </li>
                                        </ul>
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
                                    <!--profile cover start-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="cover-profile">
                                                <div class="profile-bg-img">
                                                    <img class="profile-bg-img img-fluid" src="../files/assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                                    <div class="card-block user-info">
                                                        <div class="col-md-12">
                                                            <div class="media-left">
                                                                <a href="#" class="profile-image">
                                                                    <img class="user-img img-radius" src='{{asset("images/teacher/$teacher->photo")}}' alt="user-img" >
                                                                </a>
                                                            </div>
                                                            <div class="media-body row">
                                                                <div class="col-lg-12">
                                                                    <div class="user-title">
                                                                        <h2>{{$teacher->name}}</h2>
                                                                        <span class="text-white">{{$teacher->designation}}</span>
                                                                        <br>
                                                                        <span class="text-white">{{$teacher->email}}</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="pull-right cover-btn">
                                                                        <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                                                        <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--profile cover end-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- tab header start -->
                                            <div class="tab-header card">
                                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Educational Info</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Training/Workshop</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    {{--<li class="nav-item">--}}
                                                        {{--<a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a>--}}
                                                        {{--<div class="slide"></div>--}}
                                                    {{--</li>--}}
                                                </ul>
                                            </div>
                                            <!-- tab header end -->
                                            <!-- tab content start -->
                                            <div class="tab-content">
                                                <!-- tab panel personal start -->
                                                <div class="tab-pane active" id="personal" role="tabpanel">
                                                    <!-- personal card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">Personal Info</h5>

                                                        </div>
                                                        <div class="card-block">
                                                            <div class="view-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="general-info">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table m-0">
                                                                                            <tbody>

                                                                                            <tr>
                                                                                                <th scope="row">Full Name</th>
                                                                                                <td>{{$teacher->name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Gender</th>
                                                                                                <td>{{$teacher->sex}}</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <th scope="row">Birth Date</th>
                                                                                                <td>{{$teacher->dob}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Email</th>
                                                                                                <td>{{$teacher->email}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Nationality</th>
                                                                                                <td>{{$teacher->nationality}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Blood Group</th>
                                                                                                <td>{{$teacher->blood_group}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Marital Status</th>
                                                                                                <td>{{$teacher->marital_status}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Fathers Name</th>
                                                                                                <td>{{$teacher->fathers_name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Mothers Name</th>
                                                                                                <td>{{$teacher->mothers_name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Phone</th>
                                                                                                <td><a href="#!">{{$teacher->phone}}</a></td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end of table col-lg-6 -->
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table">
                                                                                            <tbody>

                                                                                            <tr>
                                                                                                <th scope="row">Present Address</th>
                                                                                                <td>{{$teacher->present_address}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Permanent Address</th>
                                                                                                <td>{{$teacher->permanent_address}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Emergency Contact</th>
                                                                                                <td>{{$teacher->emergency_contact}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Contact Name</th>
                                                                                                <td>{{$teacher->contact_name}}</td>
                                                                                            </tr><tr>
                                                                                                <th scope="row">Relation</th>
                                                                                                <td>{{$teacher->relation}}</td>
                                                                                            </tr><tr>
                                                                                                <th scope="row">Contact Name</th>
                                                                                                <td>{{$teacher->contact_name}}</td>
                                                                                            </tr><tr>
                                                                                                <th scope="row">Marriage Date</th>
                                                                                                <td>{{$teacher->marriage_date}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Spouse Name</th>
                                                                                                <td>{{$teacher->spouse_name}}</td>
                                                                                            </tr><tr>
                                                                                                <th scope="row">Spouse Occupation</th>
                                                                                                <td>{{$teacher->spouse_occupation}}</td>
                                                                                            </tr><tr>
                                                                                                <th scope="row">Number of Children</th>
                                                                                                <td>{{$teacher->children_no}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Extra Curricular Activity</th>
                                                                                                <td>{{$teacher->extra_curricular_activity}}</td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end of table col-lg-6 -->
                                                                            </div>
                                                                            <!-- end of row -->
                                                                        </div>
                                                                        <!-- end of general info -->
                                                                    </div>
                                                                    <!-- end of col-lg-12 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>

                                                        </div>
                                                        <!-- end of card-block -->
                                                    </div>


                                                </div>
                                                <!-- tab pane personal end -->
                                                <!-- tab pane info start -->
                                                <div class="tab-pane" id="binfo" role="tabpanel">
                                                    <!-- info card start -->
                                                    @foreach($teacher->teacherSecondaries as $teacherSecondary)
                                                        @for ($i = 0; $i < 10; $i++)
                                                            <div class="view-info">{{$teacherSecondary[$i]['id']}}</div>
                                                        @endfor
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">{{$teacherSecondary->name_of_exam ?? ""}}</h5>
                                                            <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                                <i class="icofont icofont-edit"></i>
                                                            </button>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="view-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="general-info">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table m-0">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <th scope="row">School Name</th>
                                                                                                <td>{{$teacherSecondary->school_name ?? ""}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">District</th>
                                                                                                <td>{{$teacherSecondary->district ?? ""}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Educational System</th>
                                                                                                <td>{{$teacherSecondary->educational_system ?? ""}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Name Of Exam</th>
                                                                                                <td>{{$teacherSecondary->name_of_exam ?? ""}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Board Name</th>
                                                                                                <td>{{$teacherSecondary->board_name ?? ""}}</td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end of table col-lg-6 -->
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <th scope="row">Passing Year</th>
                                                                                                <td>{{$teacherSecondary->passing_year ?? ""}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Group</th>
                                                                                                <td>{{$teacherSecondary->group ?? ""}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">GPA</th>
                                                                                                <td>{{$teacherSecondary->gpa ?? ""}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Point</th>
                                                                                                <td>{{$teacherSecondary->point ?? ""}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Board_Name</th>
                                                                                                <td>{{$teacherSecondary->board_name ?? ""}}</td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end of table col-lg-6 -->
                                                                            </div>
                                                                            <!-- end of row -->
                                                                        </div>
                                                                        <!-- end of general info -->
                                                                    </div>
                                                                    <!-- end of col-lg-12 -->
                                                                </div>


                                                                <!-- end of row -->

                                                            </div>
                                                            <!-- end of view-info -->

                                                        </div>
                                                        <!-- end of card-block -->
                                                    </div>

                                                    <!-- info card end -->
                                                    @endforeach
                                                </div>
                                                <!-- tab pane info end -->
                                                <!-- tab pane contact start -->
                                                <div class="tab-pane" id="contacts" role="tabpanel">
                                                    @foreach($teacher->TeacherWorkshops as $workshop)
                                                        @for ($i = 0; $i < 10; $i++)
                                                            <div class="view-info">{{$workshop[$i]['id']}}</div>
                                                        @endfor
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">Workshop/Training</h5>
                                                            <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                                <i class="icofont icofont-edit"></i>
                                                            </button>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="view-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="general-info">
                                                                            <div class="row">


                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table m-0">
                                                                                            <tbody>






                                                                                                <tr>
                                                                                                <th scope="row">Title</th>
                                                                                                <td>{{$workshop->title}}</td>
                                                                                                {{--<td>{{$teacher->TeacherWorkshops->title ?? ""}}</td>--}}
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Trainer</th>
                                                                                                <td>{{$workshop->trainer}}</td>
                                                                                            </tr>

                                                                                            </tbody>

                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end of table col-lg-6 -->
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table">
                                                                                            <tbody>

                                                                                            <tr>
                                                                                                <th scope="row">Duration</th>
                                                                                                <td>{{$workshop->duration }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Description</th>
                                                                                                <td height="30%"width="18%">{{$workshop->description}}</td>
                                                                                            </tr>



                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- end of table col-lg-6 -->
                                                                            </div>
                                                                            <!-- end of row -->
                                                                        </div>
                                                                        <!-- end of general info -->
                                                                    </div>
                                                                    <!-- end of col-lg-12 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>

                                                            <!-- end of view-info -->

                                                        </div>

                                                        <!-- end of card-block -->
                                                    </div>
                                                    @endforeach

                                                </div>

                                            </div>

                                            <!-- tab content end -->
                                        </div>

                                    </div>
                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main body end -->
                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
