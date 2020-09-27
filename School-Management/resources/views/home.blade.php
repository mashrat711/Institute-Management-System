@extends('layouts.app')

@section('content')
    {{--//<section class="content-header">--}}
    <div class="container">
        {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
        {{--<div class="card">--}}
        {{--<div class="card-header">Dashboard</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}


        <section class="content">
            <div class="panel panel-success">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </section>

    </div>
@endsection
