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
                            <h5 class="m-b-10">Create Notice</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Notice</a>
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
                                            {!! Form::open(array('route' => 'School.store' ,"class"=>"form-control-center",
                                            "encType"=>'multipart/form-data','method' => 'POST')) !!}

                                            <div class="form-group">
                                                {{ Form::label("Class:", null, ['class' => 'control-label']) }}

                                                {{Form::text("class",
                                                             old("class") ? old("class") : (!empty($class) ? $class->class : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Class name",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Class id:", null, ['class' => 'control-label']) }}

                                                {{Form::text("class_id",
                                                             old("class_id") ? old("class_id") : (!empty($class) ? $class->class_id : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => " ",
                                                             ])
                                                }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label("Remark:", null, ['class' => 'control-label']) }}

                                                {{Form::text("remark",
                                                             old("remark") ? old("remark") : (!empty($class) ? $class->remark: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Username",
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