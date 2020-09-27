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
                            <h5 class="m-b-10">Create Schedule</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Schedule</a>
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
                                            {!! Form::open(array('route' => 'Schedule.store' ,"class"=>"form-control-center",
                                            "encType"=>'multipart/form-data','method' => 'POST')) !!}

                                            <div class="form-group">
                                                {{ Form::label("Class:", null, ['class' => 'control-label']) }}

                                                {{Form::select("class_name",$classesId,
                                                             old("class_name") ? old("class_name") : (!empty($row) ? $row-> class_name: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Class name",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Class id:", null, ['class' => 'control-label']) }}

                                                {{Form::select("class_id",$classes,
                                                             old("class_id") ? old("class_id") : (!empty($row) ? $row->class_id : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => " ",
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
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Time Start:", null, ['class' => 'control-label']) }}

                                                {{Form::time("timeStart",
                                                             old("timeStart") ? old("timeStart") : (!empty($row) ? $row->timeStart: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Username",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Time End:", null, ['class' => 'control-label']) }}

                                                {{Form::time("timeEnd",
                                                             old("timeEnd") ? old("timeEend") : (!empty($row) ? $row->timeEnd: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Teacher Name:", null, ['class' => 'control-label']) }}

                                                {{Form::select("teacher_id",$teachersList,
                                                             old("teacher_id") ? old("teacher_id") : (!empty($row) ? $row->teacher_id: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Room id:", null, ['class' => 'control-label']) }}

                                                {{Form::text("room_id",
                                                             old("room_id") ? old("room_id") : (!empty($row) ? $row->room_id: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Subject:", null, ['class' => 'control-label']) }}

                                                {{Form::text("subject",
                                                             old("subject") ? old("subject") : (!empty($row) ? $row->subject: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Category:", null, ['class' => 'control-label']) }}

                                                {{Form::text("category",
                                                             old("category") ? old("category") : (!empty($row) ? $row->category: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div>


                                            <div class="form-group">
                                                {{ Form::label("Day :", null, ['class' => 'control-label']) }}
                                                {{Form::select("day",['Sat' => 'Saturday', 'Sun' => 'SunDay', 'Mon' => 'MonDay', 'Tues' => 'TuesDay', 'Wed' => 'WednesDay', 'Thurs' => 'ThursDay'], null,
                                                             [
                                                                "class" => "form-group",
                                                                "placeholder" => "Pick a day"
                                                             ])
                                                }}


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
@endsection