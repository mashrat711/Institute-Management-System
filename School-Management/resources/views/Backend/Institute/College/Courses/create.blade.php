@extends('Backend.admin.master')
@section('content')
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
                                            {!! Form::open(array('route' => 'College.store' ,"class"=>"form-control-center",
                                            "encType"=>'multipart/form-data','method' => 'POST')) !!}

                                            <div class="form-group">
                                                {{ Form::label("Name:", null, ['class' => 'control-label']) }}

                                                {{Form::text("name",
                                                             old("name") ? old("name") : (!empty($college) ? $college->name : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Class name",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Course id:", null, ['class' => 'control-label']) }}

                                                {{Form::text("course_id",
                                                             old("course_id") ? old("course_id") : (!empty($college) ? $college->course_id : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => " ",
                                                             ])
                                                }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label("Remark:", null, ['class' => 'control-label']) }}

                                                {{Form::text("remark",
                                                             old("remark") ? old("remark") : (!empty($college) ? $college->remark: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Username",
                                                             ])
                                                }}
                                            </div><div class="form-group">
                                                {{ Form::label("Certificate:", null, ['class' => 'control-label']) }}

                                                {{Form::text("certificate",
                                                             old("certificate") ? old("certificate") : (!empty($college) ? $college->certificate: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Username",
                                                             ])
                                                }}
                                            </div><div class="form-group">
                                                {{ Form::label("Duration:", null, ['class' => 'control-label']) }}

                                                {{Form::text("duration",
                                                             old("duration") ? old("duration") : (!empty($college) ? $college->duration: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Username",
                                                             ])
                                                }}
                                            </div>
                                            {{--<div class="form-group">--}}
                                                {{--{{ Form::label("Details:", null, ['class' => 'control-label' ]) }}--}}


                                                {{--{{Form::textarea("details", old("details") ? old("details") : (!empty($college) ? $college->details : null),--}}
                                                             {{--[--}}
                                                                {{--"class" => "form-group",--}}
                                                             {{--])--}}
                                                {{--}}--}}

                                            {{--</div>--}}

                                            <div class="form-group">
                                                {{ Form::label("Shift :", null, ['class' => 'control-label']) }}
                                                {{Form::select("shift",['Morning' => 'Morning', 'Day' => 'Day'], null,
                                                             [
                                                                "class" => "form-group",
                                                                "placeholder" => "Pick a shift"
                                                             ])
                                                }}

                                                <div class="form-group">
                                                    {{ Form::label("Section :", null, ['class' => 'control-label']) }}
                                                    {{Form::select("section",['A' => 'A', 'B' => 'B', 'C' => 'C'], null,
                                                                 [
                                                                    "class" => "form-group",
                                                                    "placeholder" => "section"
                                                                 ])
                                                    }}
                                                </div><div class="form-group">
                                                    {{ Form::label("Group :", null, ['class' => 'control-label']) }}
                                                    {{Form::select("group",['Science' => 'Science', 'Commerce' => 'Commerce', 'Arts' => 'Arts'], null,
                                                                 [
                                                                    "class" => "form-group",
                                                                    "placeholder" => "section"
                                                                 ])
                                                    }}
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
@endsection