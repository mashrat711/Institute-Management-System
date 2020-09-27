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
                                            {!! Form::open(array('route' => 'Notices.store' ,"class"=>"form-control-center",
                                            "encType"=>'multipart/form-data','method' => 'POST')) !!}

                                            <div class="form-group">
                                                {{ Form::label("Title:", null, ['class' => 'control-label']) }}

                                                {{Form::text("title",
                                                             old("title") ? old("title") : (!empty($notice) ? $notice->title : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Time:", null, ['class' => 'control-label']) }}

                                                {{Form::time("time",
                                                             old("time") ? old("time") : (!empty($notice) ? $notice->time : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => " ",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Date:", null, ['class' => 'control-label']) }}

                                                {{Form::date("date",
                                                             old("date") ? old("date") : (!empty($notice) ? $notice->date : null),
                                                             [
                                                                "class" => "form-group user-email",
                                                                "placeholder" => "",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Description:", null, ['class' => 'control-label' ]) }}


                                                {{Form::textarea("description", old("description") ? old("description") : (!empty($notice) ? $notice->description : null),
                                                             [
                                                                "class" => "form-group",
                                                             ])
                                                }}

                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Image :", null, ['class' => 'control-label']) }}
                                                {{Form::file("photo", old("photo") ? old("photo") : (!empty($notice) ? $notice->photo : null),
                                                             [
                                                                "class" => "form-group",
                                                             ])
                                                }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Role :", null, ['class' => 'control-label']) }}
                                                {{Form::select("role",['Teacher' => 'Teacher', 'Student' => 'Student' , 'Stuff' => 'Stuff' , 'All' => 'All'], null,
                                                             [
                                                                "class" => "form-group",
                                                                "placeholder" => "Pick a role..."
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