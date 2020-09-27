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
                            <h5 class="m-b-10">College Data</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Create courses</a>
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
                                            {!! Form::open(array('route' => 'classes.store' ,"class"=>"form-control-center",
                                            "encType"=>'multipart/form-data','method' => 'POST')) !!}
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label("Class:", null, ['class' => 'control-label']) }}

            {{Form::text("class",
                         old("class") ? old("class") : (!empty($class) ? $class->class: null),
                         [
                            "class" => "form-group user-email",
                            "placeholder" => "Class name",
                         ])
            }}
        </div>
                                            <div class="form-group">
                                                {{ Form::label("Category:", null, ['class' => 'control-label']) }}

                                                {{Form::text("category",
                                                             old("category") ? old("category") : (!empty($class) ? $class->category : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Class name",
                                                             ])
                                                }}

                                                <div class="form-group">
                                                    {{ Form::label("Room No:", null, ['class' => 'control-label']) }}

                                                    {{Form::text("roomNo",
                                                                 old("roomNo") ? old("roomNo") : (!empty($class) ? $class->roomNo : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "Class name",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Subject:", null, ['class' => 'control-label']) }}

                                                    {{Form::text("subject",
                                                                 old("subject") ? old("subject") : (!empty($class) ? $class->subject : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "Class name",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Teacher id:", null, ['class' => 'control-label']) }}

                                                    <select name="teacher_id" id="">
                                                        @foreach($teachersList as $key => $teacher)
                                                            <option value="{{$key}}"> {{$teacher}}  </option>
                                                        @endforeach
                                                    </select>
                                                    {{Form::text("teacher_id",

                                                                 old("teacher_id") ? old("teacher_id") : (!empty($class) ? $class->teacher_id: null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "Class name",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Date:", null, ['class' => 'control-label']) }}

                                                    {{Form::date("Date",
                                                                 old("date") ? old("date") : (!empty($class) ? $class->date : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "Class name",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Time Start:", null, ['class' => 'control-label']) }}

                                                    {{Form::time("timeStart",
                                                                 old("timeStart") ? old("timeStart") : (!empty($class) ? $class->timeStart : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "Class name",
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Time End:", null, ['class' => 'control-label']) }}

                                                    {{Form::time("timeStart",
                                                                 old("timeEnd") ? old("timeEnd") : (!empty($class) ? $class->timeEnd : null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "Class name",
                                                                 ])
                                                    }}
                                                </div>
                                                </div>
        </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 {{ Form::label("Level:", null, ['class' => 'control-label']) }}

                                                 {{Form::text("level",
                                                              old("level") ? old("level") : (!empty($class) ? $class->level: null),
                                                              [
                                                                 "class" => "form-group user-email",
                                                                 "placeholder" => "Class name",
                                                              ])
                                                 }}
                                             </div>
                                             <div class="form-group">
                                                 {{ Form::label("Part:", null, ['class' => 'control-label']) }}

                                                 {{Form::text("part",
                                                              old("part") ? old("part") : (!empty($class) ? $class->part: null),
                                                              [
                                                                 "class" => "form-group user-email",
                                                                 "placeholder" => "",
                                                              ])
                                                 }}
                                             </div>

                                            <div class="form-group">
                                                {{ Form::label("Remark:", null, ['class' => 'control-label']) }}

                                                {{Form::text("remark",
                                                             old("remark") ? old("remark") : (!empty($class) ? $class->remark: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                                <div class="form-group">
                                                    {{ Form::label("Session Id:", null, ['class' => 'control-label']) }}


                                                    {{Form::select("session_id", $sessions,
                                                                 old("session_id") ? old("session_id") : (!empty($class) ? $class->session_id: null),
                                                                 [
                                                                    "class" => "form-group user-email",
                                                                    "placeholder" => "",
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
                                                    {{ Form::label("Group :", null, ['class' => 'control-label']) }}
                                                    {{Form::select("group",['Science' => 'Science', 'Commerce' => 'Commerce', 'Arts' => 'Arts'], null,
                                                                 [
                                                                    "class" => "form-group",
                                                                    "placeholder" => "section"
                                                                 ])
                                                    }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("Status :", null, ['class' => 'control-label']) }}
                                                    {{Form::select("status",['Active' => 'Active', 'Cancelled' => 'Cancelled'], null,
                                                                 [
                                                                    "class" => "form-group",
                                                                    "placeholder" => "section"
                                                                 ])
                                                    }}
                                                </div>

                                                {{--<div class="form-group">--}}
                                                    {{--{{ Form::label("Session id:", null, ['class' => 'control-label']) }}--}}
                                                    {{--{{Form::select("session_id", null,--}}
                                                             {{--[--}}
                                                                {{--"class" => "form-group",--}}
                                                                {{--"placeholder" => "Pick a shift"--}}
                                                             {{--])--}}

                                                {{--}}--}}
                                                    {{--<select name="session_id" id="">--}}
                                                        {{--@foreach($sessions as $key => $session)--}}
                                                            {{--<option value="{{$key}}"> {{$session}}  </option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</select>--}}
                                                    {{--{{Form::text("session_id",--}}
                                                                 {{--old("session_id") ? old("session_id") : (!empty($class) ? $class->session_id: null),--}}
                                                                 {{--[--}}
                                                                    {{--"class" => "form-group user-email",--}}
                                                                    {{--"placeholder" => "Class name",--}}
                                                                 {{--])--}}
                                                    {{--}}--}}
                                                {{--</div>--}}

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