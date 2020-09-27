@extends('Backend.admin.master')
@section('teacher')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Education & Workshop/Training</h5>
                            <br>
                            @if(session('message'))
                                <div class="alert alert-success"> {{session('message')}} </div>
                            @endif


                            <br>
                            <br>
                            <a href="{{route('Secondary.create')}}"><button class="btn btn-grd-info ">Education</button></a>

                            <a href="{{route('Training.create')}}"><button class="btn btn-grd-success ">Workshop/Training</button></a>




                        </div>
                    </div>
                    <!-- Page-header end -->


    </div>
    </div></div>
    </div>

    @endsection