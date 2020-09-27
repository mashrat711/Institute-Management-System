@extends('Backend.admin.master')
@section('dashboard')

    <!-- Sidebar inner chat end-->
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
                                        <h5 class="m-b-10">Teachers Form</h5>

                                        <ul class="breadcrumb-title b-t-default p-t-10">
                                            <li class="breadcrumb-item">
                                                <a href=""> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Teachers</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Add New</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    {{--<h5>Teachers Personal</h5>--}}

                                                </div>
                                                <div class="card-block">

                                                    <h4 class="sub-title">Personal Info</h4>

                                                    <form method="post" encType ="multipart/form-data" action="{{route('Teacher.store')}}">
                                                        @csrf
                                                        <fieldset class="sub-title">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="name" class="form-control"
                                                                       value="{{ old("name") ? old("name") : (!empty($teacher) ? $teacher->name : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" name="email" class="form-control"
                                                                       placeholder=""
                                                                       value="{{ old("email") ? old("email") : (!empty($teacher) ? $teacher->email : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Date of Birth</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="dob" class="form-control"
                                                                       placeholder="Password input"
                                                                       value="{{ old("dob") ? old("dob") : (!empty($teacher) ? $teacher->dob : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Religion</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"  name="religion"
                                                                       placeholder="" value="{{ old("religion") ? old("religion") : (!empty($teacher) ? $teacher->religion: null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nationality</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                       name="nationality"
                                                                       value="{{ old("nationality") ? old("nationality") : (!empty($teacher) ? $teacher->nationality : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Gender</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                       name="sex"
                                                                       value="{{ old("sex") ? old("sex") : (!empty($teacher) ? $teacher->sex : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Marital Status</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="marital_status"
                                                                       class="form-control "
                                                                       placeholder=".form-control-round"
                                                                       value="{{ old("marital_status") ? old("marital_status") : (!empty($teacher) ? $teacher->marital_status : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Blood Group</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                  name="blood_group"
                                                                       value="{{ old("blood_group") ? old("blood_group") : (!empty($teacher) ? $teacher->blood_group : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Teacher Id</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                       name="teacher_id"
                                                                       value="{{ old("teacher_id") ? old("teacher_id") : (!empty($teacher) ? $teacher->teacher_id : null) }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">National Id</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="national_id" class="form-control"
                                                                       value="{{ old("national_id") ? old("national_id") : (!empty($teacher) ? $teacher->national_id : null) }}">
                                                            </div>
                                                        </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Phone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="phone" class="form-control"
                                                                           value="{{ old("phone") ? old("phone") : (!empty($teacher) ? $teacher->phone : null) }}">
                                                                </div>
                                                        </div>
                                                        {{--<div class="form-group row">--}}
                                                            {{--<label class="col-sm-2 col-form-label">Phone</label>--}}
                                                            {{--<div class="col-sm-10">--}}
                                                                {{--<input type="text" name="phone" class="form-control"--}}
                                                                       {{--value="{{ old("phone") ? old("phone") : (!empty($teacher) ? $teacher->phone : null) }}">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Upload File</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="photo" class="form-control"
                                                                       value="{{ old("dob") ? old("dob") : (!empty($teacher) ? $teacher->dob : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Fathers Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="fathers_name" class="form-control"
                                                                       value="{{ old("fathers_name") ? old("fathers_name") : (!empty($teacher) ? $teacher->fathers_name: null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Mothers Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="mothers_name" class="form-control"
                                                                       value="{{ old("mothers_name") ? old("mothers_name") : (!empty($teacher) ? $teacher->mothers_name : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Emergency Contact</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="emergency_contact" class="form-control"
                                                                       value="{{ old("emergency_contact") ? old("emergency_contact") : (!empty($teacher) ? $teacher->emergency_contact: null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Relation</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="relation" class="form-control"
                                                                       value="{{ old("relation") ? old("relation") : (!empty($teacher) ? $teacher->relation : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Contact Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="contact_name" class="form-control"
                                                                       value="{{ old("contact_name") ? old("contact_name") : (!empty($teacher) ? $teacher->contact_name: null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Spouse Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="spouse_name" class="form-control"
                                                                       value="{{ old("spouse_name") ? old("spouse_name") : (!empty($teacher) ? $teacher->spouse_name: null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Spouse Occupation</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="spouse_occupation" class="form-control"
                                                                       value="{{ old("spouse_occupation") ? old("spouse_occupation") : (!empty($teacher) ? $teacher->spouse_occupation: null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Mothers Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="mothers_name" class="form-control"
                                                                       value="{{ old("mothers_name") ? old("mothers_name") : (!empty($teacher) ? $teacher->mothers_name : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Extra Curricular Activity</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="extra_curricular_activity" class="form-control"
                                                                       value="{{ old("extra_curricular_activity") ? old("extra_curricular_activity") : (!empty($teacher) ? $teacher->extra_curricular_activity : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Children No</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="children_no" class="form-control"
                                                                       value="{{ old("children_no") ? old("children_no") : (!empty($teacher) ? $teacher->children_no : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Status</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="status" class="form-control"
                                                                       value="{{ old("status") ? old("status") : (!empty($teacher) ? $teacher->status : null) }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Present Address</label>
                                                            <div class="col-sm-10">
                                                                <textarea rows="5" cols="5" class="form-control"
                                                                        name="present_address"  placeholder=""
                                                                          value="{{ old("present_address") ? old("present_address") : (!empty($teacher) ? $teacher->present_address : null) }}"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Permanent Address</label>
                                                            <div class="col-sm-10">
                                                                <textarea rows="5" cols="5" class="form-control"
                                                                       name="permanent_address"
                                                                          placeholder=""
                                                                          value="{{ old("permanent_address") ? old("permanent_address") : (!empty($teacher) ? $teacher->permanent_address : null) }}"></textarea>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                        <br>
                                                        <br>

                                                        <div class="form-group row">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    </form>

                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-sm-6 mobile-inputs">--}}
                                                            {{--<h4 class="sub-title">Text-color</h4>--}}
                                                            {{--<form>--}}
                                                                {{--<div class="form-group">--}}
                                                                    {{--<input type="text"--}}
                                                                           {{--class="form-control form-txt-primary"--}}
                                                                           {{--placeholder=".form-txt-primary">--}}
                                                                {{--</div>--}}
                                                                {{--<div class="form-group row">--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-txt-warning"--}}
                                                                               {{--placeholder=".form-txt-warning">--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-txt-default"--}}
                                                                               {{--placeholder=".form-txt-default">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="form-group row">--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-txt-danger"--}}
                                                                               {{--placeholder=".form-txt-danger">--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-txt-success"--}}
                                                                               {{--placeholder=".form-txt-success">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="form-group row">--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-txt-inverse"--}}
                                                                               {{--placeholder=".form-txt-inverse">--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-txt-info"--}}
                                                                               {{--placeholder=".form-txt-info">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</form>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-sm-6 mobile-inputs">--}}
                                                            {{--<h4 class="sub-title">Background-color</h4>--}}
                                                            {{--<form>--}}
                                                                {{--<div class="form-group">--}}
                                                                    {{--<input type="text"--}}
                                                                           {{--class="form-control form-bg-primary"--}}
                                                                           {{--placeholder=".form-bg-primary">--}}
                                                                {{--</div>--}}
                                                                {{--<div class="form-group row">--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-bg-warning"--}}
                                                                               {{--placeholder=".form-bg-warning">--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-bg-default"--}}
                                                                               {{--placeholder=".form-bg-default">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="form-group row">--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-bg-danger"--}}
                                                                               {{--placeholder=".form-bg-danger">--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-bg-success"--}}
                                                                               {{--placeholder=".form-bg-success">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="row">--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-bg-inverse"--}}
                                                                               {{--placeholder=".form-bg-inverse">--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-sm-6">--}}
                                                                        {{--<input type="text"--}}
                                                                               {{--class="form-control form-bg-info"--}}
                                                                               {{--placeholder=".form-bg-info">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</form>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->
                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
            </div>




@endsection