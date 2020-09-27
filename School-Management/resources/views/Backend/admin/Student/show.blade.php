@extends('Backend.admin.master')
@section('student_view_content')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header card">
                                    <div class="card-block">
                                        <h5 class="m-b-10">Students Profile</h5>
                                        <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <ul class="breadcrumb-title b-t-default p-t-10">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Students Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page-body start -->
                                <div class="page-body">
                                    <!--profile cover start-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="cover-profile">
                                                <div class="profile-bg-img">
                                                    <img class="profile-bg-img img-fluid"
                                                         src="{{asset('files/assets/images/user-profile/bg-img1.jpg')}}" alt="bg-img">
                                                    <div class="card-block user-info">
                                                        <div class="col-md-12">
                                                            <div class="media-left">

                                                                <a href="#" class="profile-image">
                                                                    <img class="d-flex align-self-center img-radius" src='{{asset("images/student/$student->photo")}}' alt="">
                                                                </a>

                                                            </div>
                                                            <div class="media-body row">
                                                                <div class="col-lg-12">
                                                                    <div class="user-title">
                                                                        <h2>{{$student->name}}</h2>
                                                                        <span class="text-white">{{$student->email}}</span>
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
                                                    {{--<li class="nav-item">--}}
                                                        {{--<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>--}}
                                                        {{--<div class="slide"></div>--}}
                                                    {{--</li>--}}
                                                    <li class="nav-item">
                                                        <a class="nav-link " data-toggle="tab" href="#binfo" role="tab">Personal Info</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    {{--<li class="nav-item">--}}
                                                        {{--<a class="nav-link " data-toggle="tab" href="#contacts" role="tab">Educational Info</a>--}}
                                                        {{--<div class="slide"></div>--}}
                                                    {{--</li>--}}


                                                </ul>
                                            </div>
                                            <!-- tab header end -->
                                            <!-- tab content start -->
                                            <div class="tab-content">
                                                <!-- tab panel personal start -->
                                                <div class="tab-pane active" id="binfo" role="tabpanel">
                                                    <!-- personal card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">Student Info</h5>
                                                            {{--<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">--}}
                                                                {{--<i class="icofont icofont-edit"></i>--}}
                                                            {{--</button>--}}
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
                                                                                                <th scope="row">FullName</th>
                                                                                                <td>{{$student->name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Gender</th>
                                                                                                <td>{{$student->gender}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Birth Date</th>
                                                                                                <td>{{$student->dob}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Email</th>
                                                                                                <td>{{$student->email}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Nationality</th>
                                                                                                <td>{{$student->nationality}}</td>
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
                                                                                                <th scope="row">Blood Group</th>
                                                                                                <td><a href="#!">{{$student->blood_group}}</a></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Mobile Number</th>
                                                                                                <td>{{$student->mobile}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Extra Curricular Activity</th>
                                                                                                <td>{{$student->extra_Curricular_Activity}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Religion</th>
                                                                                                <td>{{$student->religion}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Note</th>
                                                                                                <td><a href="#!">{{$student->note}}</a></td>
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
                                                            {{--<div class="edit-info">--}}
                                                                {{--<div class="row">--}}
                                                                    {{--<div class="col-lg-12">--}}
                                                                        {{--<div class="general-info">--}}
                                                                            {{--<div class="row">--}}
                                                                                {{--<div class="col-lg-6">--}}
                                                                                    {{--<table class="table">--}}
                                                                                        {{--<tbody>--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<div class="input-group">--}}
                                                                                                    {{--<span class="input-group-addon"><i class="icofont icofont-user"></i></span>--}}
                                                                                                    {{--<input type="text" class="form-control" placeholder="Full Name">--}}
                                                                                                {{--</div>--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<div class="form-radio">--}}
                                                                                                    {{--<div class="group-add-on">--}}
                                                                                                        {{--<div class="radio radiofill radio-inline">--}}
                                                                                                            {{--<label>--}}
                                                                                                                {{--<input type="radio" name="radio" checked><i class="helper"></i> Male--}}
                                                                                                            {{--</label>--}}
                                                                                                        {{--</div>--}}
                                                                                                        {{--<div class="radio radiofill radio-inline">--}}
                                                                                                            {{--<label>--}}
                                                                                                                {{--<input type="radio" name="radio"><i class="helper"></i> Female--}}
                                                                                                            {{--</label>--}}
                                                                                                        {{--</div>--}}
                                                                                                    {{--</div>--}}
                                                                                                {{--</div>--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<select id="hello-single" class="form-control">--}}
                                                                                                    {{--<option value="">---- Marital Status ----</option>--}}
                                                                                                    {{--<option value="married">Married</option>--}}
                                                                                                    {{--<option value="unmarried">Unmarried</option>--}}
                                                                                                {{--</select>--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<div class="input-group">--}}
                                                                                                    {{--<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>--}}
                                                                                                    {{--<input type="text" class="form-control" placeholder="Address">--}}
                                                                                                {{--</div>--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--</tbody>--}}
                                                                                    {{--</table>--}}
                                                                                {{--</div>--}}
                                                                                {{--<!-- end of table col-lg-6 -->--}}
                                                                                {{--<div class="col-lg-6">--}}
                                                                                    {{--<table class="table">--}}
                                                                                        {{--<tbody>--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<div class="input-group">--}}
                                                                                                    {{--<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>--}}
                                                                                                    {{--<input type="text" class="form-control" placeholder="Mobile Number">--}}
                                                                                                {{--</div>--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<div class="input-group">--}}
                                                                                                    {{--<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>--}}
                                                                                                    {{--<input type="text" class="form-control" placeholder="Twitter Id">--}}
                                                                                                {{--</div>--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--<!-- <tr>--}}
                                                                            {{--<td>--}}
                                                                                {{--<div class="input-group">--}}
                                                                                    {{--<span class="input-group-addon" id="basic-addon1">@</span>--}}
                                                                                    {{--<input type="text" class="form-control" placeholder="Twitter Id">--}}
                                                                                {{--</div>--}}
                                                                            {{--</td>--}}
                                                                        {{--</tr> -->--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<div class="input-group">--}}
                                                                                                    {{--<span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>--}}
                                                                                                    {{--<input type="email" class="form-control" placeholder="Skype Id">--}}
                                                                                                {{--</div>--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--<tr>--}}
                                                                                            {{--<td>--}}
                                                                                                {{--<div class="input-group">--}}
                                                                                                    {{--<span class="input-group-addon"><i class="icofont icofont-earth"></i></span>--}}
                                                                                                    {{--<input type="text" class="form-control" placeholder="website">--}}
                                                                                                {{--</div>--}}
                                                                                            {{--</td>--}}
                                                                                        {{--</tr>--}}
                                                                                        {{--</tbody>--}}
                                                                                    {{--</table>--}}
                                                                                {{--</div>--}}
                                                                                {{--<!-- end of table col-lg-6 -->--}}
                                                                            {{--</div>--}}
                                                                            {{--<!-- end of row -->--}}
                                                                            {{--<div class="text-center">--}}
                                                                                {{--<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>--}}
                                                                                {{--<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                        {{--<!-- end of edit info -->--}}
                                                                    {{--</div>--}}
                                                                    {{--<!-- end of col-lg-12 -->--}}
                                                                {{--</div>--}}
                                                                {{--<!-- end of row -->--}}
                                                            {{--</div>--}}
                                                            <!-- end of edit-info -->
                                                        </div>
                                                        <!-- end of card-block -->
                                                    </div>

                <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">Guardian's Info</h5>
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
                                                                                                <th scope="row">Fathers Name</th>
                                                                                                <td>{{$student->fathers_name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Mothers Name</th>
                                                                                                <td>{{$student->mothers_name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Fathers Phone</th>
                                                                                                <td>{{$student->fathers_phone_no}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Mothers Phone</th>
                                                                                                <td>{{$student->mothers_phone_no}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Local Guardian Name</th>
                                                                                                <td>{{$student->local_guardians_name}}</td>
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
                                                                                                <th scope="row">Local Guardians Phone</th>
                                                                                                <td><a href="#!">{{$student->local_guardians_phone}}</a></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Present Address</th>
                                                                                                <td>{{$student->present_address}}</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <th scope="row">Parmanent Address</th>
                                                                                                <td>{{$student->parmanent_address}}</td>
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
                                                        {{--<div class="edit-info">--}}
                                                        {{--<div class="row">--}}
                                                        {{--<div class="col-lg-12">--}}
                                                        {{--<div class="general-info">--}}
                                                        {{--<div class="row">--}}
                                                        {{--<div class="col-lg-6">--}}
                                                        {{--<table class="table">--}}
                                                        {{--<tbody>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-user"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Full Name">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="form-radio">--}}
                                                        {{--<div class="group-add-on">--}}
                                                        {{--<div class="radio radiofill radio-inline">--}}
                                                        {{--<label>--}}
                                                        {{--<input type="radio" name="radio" checked><i class="helper"></i> Male--}}
                                                        {{--</label>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="radio radiofill radio-inline">--}}
                                                        {{--<label>--}}
                                                        {{--<input type="radio" name="radio"><i class="helper"></i> Female--}}
                                                        {{--</label>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<select id="hello-single" class="form-control">--}}
                                                        {{--<option value="">---- Marital Status ----</option>--}}
                                                        {{--<option value="married">Married</option>--}}
                                                        {{--<option value="unmarried">Unmarried</option>--}}
                                                        {{--</select>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Address">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--</tbody>--}}
                                                        {{--</table>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of table col-lg-6 -->--}}
                                                        {{--<div class="col-lg-6">--}}
                                                        {{--<table class="table">--}}
                                                        {{--<tbody>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Mobile Number">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Twitter Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<!-- <tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon" id="basic-addon1">@</span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Twitter Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr> -->--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>--}}
                                                        {{--<input type="email" class="form-control" placeholder="Skype Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-earth"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="website">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--</tbody>--}}
                                                        {{--</table>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of table col-lg-6 -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of row -->--}}
                                                        {{--<div class="text-center">--}}
                                                        {{--<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>--}}
                                                        {{--<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of edit info -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of col-lg-12 -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of row -->--}}
                                                        {{--</div>--}}
                                                        <!-- end of edit-info -->
                                                        </div>
                                                        <!-- end of card-block -->
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">Academic Info</h5>
                                                            {{--<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">--}}
                                                                {{--<i class="icofont icofont-edit"></i>--}}
                                                            {{--</button>--}}
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="view-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="general-info">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <th scope="row">Class</th>
                                                                                                <td><a href="#!">{{$student->class}}</a></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Section</th>
                                                                                                <td>{{$student->section}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Group</th>
                                                                                                <td>{{$student->group}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Shift</th>
                                                                                                <td>{{$student->shift}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Registration No</th>
                                                                                                <td><a href="#!">{{$student->registration_no}}</a></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Board_Registration No</th>
                                                                                                <td><a href="#!">{{$student->board_registration_no}}</a></td>
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
                                                                                                <th scope="row">Board roll no</th>
                                                                                                <td><a href="#!">{{$student->board_roll_no}}</a></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Id card no</th>
                                                                                                <td>{{$student->id_card_no}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Elective/4th Sub </th>
                                                                                                <td>{{$student->optional_sub}}</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">House No</th>
                                                                                                <td>{{$student->house_no}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">House Name</th>
                                                                                                <td><a href="#!">{{$student->house_name}}</a></td>
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
                                                        {{--<div class="edit-info">--}}
                                                        {{--<div class="row">--}}
                                                        {{--<div class="col-lg-12">--}}
                                                        {{--<div class="general-info">--}}
                                                        {{--<div class="row">--}}
                                                        {{--<div class="col-lg-6">--}}
                                                        {{--<table class="table">--}}
                                                        {{--<tbody>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-user"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Full Name">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="form-radio">--}}
                                                        {{--<div class="group-add-on">--}}
                                                        {{--<div class="radio radiofill radio-inline">--}}
                                                        {{--<label>--}}
                                                        {{--<input type="radio" name="radio" checked><i class="helper"></i> Male--}}
                                                        {{--</label>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="radio radiofill radio-inline">--}}
                                                        {{--<label>--}}
                                                        {{--<input type="radio" name="radio"><i class="helper"></i> Female--}}
                                                        {{--</label>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<select id="hello-single" class="form-control">--}}
                                                        {{--<option value="">---- Marital Status ----</option>--}}
                                                        {{--<option value="married">Married</option>--}}
                                                        {{--<option value="unmarried">Unmarried</option>--}}
                                                        {{--</select>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Address">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--</tbody>--}}
                                                        {{--</table>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of table col-lg-6 -->--}}
                                                        {{--<div class="col-lg-6">--}}
                                                        {{--<table class="table">--}}
                                                        {{--<tbody>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Mobile Number">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Twitter Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<!-- <tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon" id="basic-addon1">@</span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Twitter Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr> -->--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>--}}
                                                        {{--<input type="email" class="form-control" placeholder="Skype Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-earth"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="website">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--</tbody>--}}
                                                        {{--</table>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of table col-lg-6 -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of row -->--}}
                                                        {{--<div class="text-center">--}}
                                                        {{--<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>--}}
                                                        {{--<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of edit info -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of col-lg-12 -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of row -->--}}
                                                        {{--</div>--}}
                                                        <!-- end of edit-info -->
                                                        </div>
                                                        <!-- end of card-block -->
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">Accecc Info</h5>
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
                                                                                                <th scope="row">User Name</th>
                                                                                                <td>{{$student->user_name}}</td>
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
                                                                                                <th scope="row">Password</th>
                                                                                                <td><a href="#!">{{$student->user_password}}</a></td>
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
                                                        {{--<div class="edit-info">--}}
                                                        {{--<div class="row">--}}
                                                        {{--<div class="col-lg-12">--}}
                                                        {{--<div class="general-info">--}}
                                                        {{--<div class="row">--}}
                                                        {{--<div class="col-lg-6">--}}
                                                        {{--<table class="table">--}}
                                                        {{--<tbody>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-user"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Full Name">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="form-radio">--}}
                                                        {{--<div class="group-add-on">--}}
                                                        {{--<div class="radio radiofill radio-inline">--}}
                                                        {{--<label>--}}
                                                        {{--<input type="radio" name="radio" checked><i class="helper"></i> Male--}}
                                                        {{--</label>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="radio radiofill radio-inline">--}}
                                                        {{--<label>--}}
                                                        {{--<input type="radio" name="radio"><i class="helper"></i> Female--}}
                                                        {{--</label>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<select id="hello-single" class="form-control">--}}
                                                        {{--<option value="">---- Marital Status ----</option>--}}
                                                        {{--<option value="married">Married</option>--}}
                                                        {{--<option value="unmarried">Unmarried</option>--}}
                                                        {{--</select>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Address">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--</tbody>--}}
                                                        {{--</table>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of table col-lg-6 -->--}}
                                                        {{--<div class="col-lg-6">--}}
                                                        {{--<table class="table">--}}
                                                        {{--<tbody>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Mobile Number">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Twitter Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<!-- <tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon" id="basic-addon1">@</span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Twitter Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr> -->--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>--}}
                                                        {{--<input type="email" class="form-control" placeholder="Skype Id">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>--}}
                                                        {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="icofont icofont-earth"></i></span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="website">--}}
                                                        {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--</tbody>--}}
                                                        {{--</table>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of table col-lg-6 -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of row -->--}}
                                                        {{--<div class="text-center">--}}
                                                        {{--<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>--}}
                                                        {{--<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of edit info -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of col-lg-12 -->--}}
                                                        {{--</div>--}}
                                                        {{--<!-- end of row -->--}}
                                                        {{--</div>--}}
                                                        <!-- end of edit-info -->
                                                        </div>
                                                        <!-- end of card-block -->
                                                    </div>
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-lg-12">--}}
                                                            {{--<div class="card">--}}
                                                                {{--<div class="card-header">--}}
                                                                    {{--<h5 class="card-header-text">Description About Me</h5>--}}
                                                                    {{--<button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">--}}
                                                                        {{--<i class="icofont icofont-edit"></i>--}}
                                                                    {{--</button>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="card-block user-desc">--}}
                                                                    {{--<div class="view-desc">--}}
                                                                        {{--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="edit-desc">--}}
                                                                        {{--<div class="col-md-12">--}}
                                                                                {{--<textarea id="description">--}}
                                                            {{--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>--}}
                                                        {{--</textarea>--}}
                                                                        {{--</div>--}}
                                                                        {{--<div class="text-center">--}}
                                                                            {{--<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>--}}
                                                                            {{--<a href="#!" id="edit-cancel-btn" class="btn btn-default waves-effect m-t-20">Cancel</a>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    <!-- personal card end-->
                                                </div>
                                                <!-- tab pane personal end -->

                                                <!-- tab pane info start -->



                                                    <!-- tab panel personal start -->

                                                        <!-- personal card end-->
                                                    </div>

                                                    <!-- tab pane personal end -->
                                                    <!-- tab pane info start -->



                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- info card end -->
                                                </div>


                                                <!-- tab pane info end -->


                                    </div>
                                </div>

                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main body end -->
                        <div id="styleSelector">

                        </div>



@endsection
