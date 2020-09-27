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
                                            {!! Form::open(array('route' => 'Course.store' ,"class"=>"form-control-center",
                                            "encType"=>'multipart/form-data','method' => 'POST')) !!}

                                            <div class="form-group">
                                                {{ Form::label("Name:", null, ['class' => 'control-label']) }}

                                                {{Form::text("name",
                                                             old("name") ? old("name") : (!empty($row) ? $row->name: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => " name",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Certificate:", null, ['class' => 'control-label']) }}

                                                {{Form::text("certificate",
                                                             old("certificate") ? old("certificate") : (!empty($row) ? $row->certificate : null),
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
                                                                "placeholder" => "Username",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Duration:", null, ['class' => 'control-label']) }}

                                                {{Form::text("duration",
                                                             old("duration") ? old("duration") : (!empty($row) ? $row->duration: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Username",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Details:", null, ['class' => 'control-label']) }}

                                                {{Form::textarea("details",
                                                             old("details") ? old("details") : (!empty($row) ? $row->details: null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "Username",
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