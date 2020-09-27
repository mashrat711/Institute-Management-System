@extends('Backend.admin.master')
@section('dashboard')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Create exams</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Create exams</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger"> {{$error}} </div>
                    @endforeach
                @endif

                <!-- Page-header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">



                                <div class="page-header card">
                                    <div class="card-block">
                                        <div class="form-control-center">
                                            {!! Form::open(array('route' => 'exams.store' ,"class"=>"form-control-center",
                                            "encType"=>'multipart/form-data','method' => 'POST')) !!}

                                            <div class="row">
                                                <div class="col-sm-6">
                                        <div class="form-group">
            {{ Form::label("Type:", null, ['class' => 'control-label']) }}

            {{Form::text("type",
                         old("type") ? old("type") : (!empty($row) ? $row->class: null),
                         [
                            "class" => "form-group user-email",
                            "placeholder" => "Exam type",
                         ])
            }}
        </div>
                                            <div class="form-group">
                                                {{ Form::label("Term:", null, ['class' => 'control-label']) }}

                                                {{Form::text("term",
                                                             old("term") ? old("term") : (!empty($row) ? $row->term : null),
                                                             [
                                                                "class" => "form-group user-email",

                                                             ])
                                                }}
                                                <div class="form-group">
                                                    {{ Form::label("Category:", null, ['class' => 'control-label']) }}

                                                    {{Form::text("category",
                                                                 old("category") ? old("category") : (!empty($row) ? $row->category : null),
                                                                 [
                                                                    "class" => "form-group user-email",

                                                                 ])
                                                    }}

                                                <div class="form-group">
                                                    {{ Form::label("Room No:", null, ['class' => 'control-label']) }}

                                                    {{Form::text("roomNo",
                                                                 old("roomNo") ? old("roomNo") : (!empty($row) ? $row->roomNo : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Subject:", null, ['class' => 'control-label']) }}

                                                    {{Form::text("subject",
                                                                 old("subject") ? old("subject") : (!empty($row) ? $row->subject : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Teacher id:", null, ['class' => 'control-label']) }}

                                                    {{Form::select("teacher_id",$teachersList,[
                                                                 old("teacher_id") ? old("teacher_id") : (!empty($row) ? $row->teacher_id: null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "",
                                                                 ]])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Date:", null, ['class' => 'control-label']) }}

                                                    {{Form::date("Date",
                                                                 old("date") ? old("date") : (!empty($row) ? $row->date : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Time Start:", null, ['class' => 'control-label']) }}

                                                    {{Form::text("timeStart",
                                                                 old("timeStart") ? old("timeStart") : (!empty($row) ? $row->timeStart : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Time End:", null, ['class' => 'control-label']) }}

                                                    {{Form::text("timeEnd",
                                                                 old("timeEnd") ? old("timeEnd") : (!empty($row) ? $row->timeEnd : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "",
                                                                 ])
                                                    }}
                                                </div>
                                                </div>
                                        </div>
                                                    </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 {{ Form::label("Level:", null, ['class' => 'control-label']) }}

                                                 {{Form::text("level",
                                                              old("level") ? old("level") : (!empty($row) ? $row->level: null),
                                                              [
                                                                 "class" => "form-group user-email",
                                                                 "placeholder" => "",
                                                              ])
                                                 }}
                                             </div>
                                             <div class="form-group">
                                                 {{ Form::label("Part:", null, ['class' => 'control-label']) }}

                                                 {{Form::text("part",
                                                              old("part") ? old("part") : (!empty($row) ? $row->part: null),
                                                              [
                                                                 "class" => "form-group user-email",
                                                                 "placeholder" => "",
                                                              ])
                                                 }}
                                             </div>

                                            <div class="form-group">
                                                {{ Form::label("Remark:", null, ['class' => 'control-label']) }}

                                                {{Form::text("remark",
                                                             old("remark") ? old("remark") : (!empty($row) ? $row->remark: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div><div class="form-group">
                                                {{ Form::label("Pass Mark:", null, ['class' => 'control-label']) }}

                                                {{Form::text("pass_marks",
                                                             old("pass_marks") ? old("pass_marks") : (!empty($row) ? $row->pass_marks: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Username",
                                                             ])
                                                }}
                                            </div>
                                             <div class="form-group">
                                                {{ Form::label("Class:", null, ['class' => 'control-label']) }}

                                                {{Form::select("class",$classes,
                                                             old("class") ? old("class") : (!empty($row) ? $row->class: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Select Class",
                                                             ])
                                                }}
                                            </div>
                                             <div class="form-group">
                                                {{ Form::label("Session_id:", null, ['class' => 'control-label']) }}

                                                {{Form::select("session_id",$sessions,
                                                             old("session_id") ? old("session_id") : (!empty($row) ? $row->session_id: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div>


                                             <div class="form-group">
                                                {{ Form::label("Details:", null, ['class' => 'control-label' ]) }}


                                                {{Form::text("details", old("details") ? old("details") : (!empty($row) ? $row->details : null),
                                                             [
                                                                "class" => "form-group","",
                                                             ])
                                                }}

                                            </div>

                                            <div class="form-group">
                                                {{ Form::label("Shift :", null, ['class' => 'control-label']) }}
                                                {{Form::select("shift",['Morning' => 'Morning', 'Day' => 'Day'], null,
                                                             [
                                                                "class" => "form-group",
                                                                "placeholder" => "Pick a shift"
                                                             ])
                                                }}
                                            </div>


                                                <div class="form-group">
                                                    {{ Form::label("Status :", null, ['class' => 'control-label']) }}
                                                    {{Form::select("status",['Active' => 'Active', 'Cancelled' => 'Cancelled'],
                                                      old("status") ? old("status") : (!empty($row) ? $row->status : null),
                                                                 [
                                                                    "class" => "form-group",
                                                                    "placeholder" => ""
                                                                 ])
                                                    }}
                                                </div>

                                                </div>
                                            <div class="form-group">
                                                {{Form::submit('Submit')}}
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
            </div>
        </div>
    </div>
    </div>

@endsection