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
                                        <h5 class="m-b-10">Box Shadow</h5>
                                        <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <ul class="breadcrumb-title b-t-default p-t-10">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Box Shadow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- alert-header start -->
                                {{--<div class="page-header card">--}}

                                    {{--@yield('content')--}}

                                {{--</div>--}}
                                <!-- alert-header end -->


                                <!-- Page-body start -->
                                <div class="page-body">
                                    <!-- Top only shadow card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>TOP ONLY</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa-chevron-left"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    <li><i class="fa fa-times close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block box-list">
                                            @yield('content')
                                        </div>
                                    </div>

                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body start -->
                        <div id="styleSelector">

                        </div>
                        </div>
                    </div>
@endsection


