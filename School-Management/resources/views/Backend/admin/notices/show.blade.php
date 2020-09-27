@extends('Backend.admin.master')
@section('notice')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Page-header start -->

            <div class="page-header card">
                <div class="card-block">
                    <h5 class="m-b-10">Notice</h5>
                    <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Notice</a>
                        </li>
                    </ul>
                    </div>
                </div>




            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- List view card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>List view</h5>

                            </div>
                            <div class="row card-block">
                                <div class="col-md-12">
                                    <ul class="list-view">
                                        <li>
                                            <div class="card list-view-media">
                                                <div class="card-block">
                                                    <div class="media">
                                                        <a class="media-left" href="#">
                                                            <img class="media-object card-list-img "height="100px" width="100px"
                                                                 src="{{asset("images/notice/$notice->photo")}}"
                                                                 alt="No Picture">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="col-xs-12">
                                                                <h6 class="d-inline-block">
                                                                    {{$notice->title}}</h6>
                                                                <label class="label label-info">{{$notice->role}}</label>
                                                            </div>
                                                            <div class="f-13 text-muted m-b-15">
                                                                {{$notice->date}}
                                                            </div>
                                                            <p>{{$notice->description}}</p>
                                                            <div class="m-t-15">
                                                                <button type="button" data-toggle="tooltip" title="Facebook"
                                                                        class="btn btn-facebook btn-mini waves-effect waves-light">
                                                                    <span class="icofont icofont-social-facebook"></span>
                                                                </button>
                                                                <button type="button" data-toggle="tooltip" title="Twitter"
                                                                        class="btn btn-twitter btn-mini waves-effect waves-light">
                                                                    <span class="icofont icofont-social-twitter"></span>
                                                                </button>
                                                                <button type="button" data-toggle="tooltip" title="Linkedin"
                                                                        class="btn btn-linkedin btn-mini waves-effect waves-light">
                                                                    <span class="icofont icofont-brand-linkedin"></span>
                                                                </button>
                                                                <button type="button"  data-toggle="tooltip" title="Drible"
                                                                        class="btn btn-dribbble btn-mini waves-effect waves-light">
                                                                    <span class="icofont icofont-social-dribble"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        {{--<li class="">--}}
                                            {{--<div class="card list-view-media">--}}
                                                {{--<div class="card-block">--}}
                                                    {{--<div class="media">--}}
                                                        {{--<a class="media-left" href="#">--}}
                                                            {{--<img class="media-object card-list-img"--}}
                                                                 {{--src="../files/assets/images/avatar-2.jpg"--}}
                                                                 {{--alt="Generic placeholder image">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<div>--}}
                                                                {{--<h6 class="d-inline-block">--}}
                                                                    {{--Heading</h6>--}}
                                                                {{--<label class="label  label-info">Accountant</label>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="f-13 text-muted m-b-15">--}}
                                                                {{--Softwear Engineer--}}
                                                            {{--</div>--}}
                                                            {{--<p>Hi, This is my short intro text.--}}
                                                                {{--Lorem ipsum is a dummy content sit--}}
                                                                {{--dollar. You can copy and paste this--}}
                                                                {{--dummy content from anywhere and to--}}
                                                                {{--anywhere. Its all free and must be a--}}
                                                                {{--good to folllow in prectice</p>--}}
                                                            {{--<div class="m-t-15">--}}
                                                                {{--<button type="button" data-toggle="tooltip" title="Facebook"--}}
                                                                        {{--class="btn btn-facebook btn-mini waves-effect waves-light">--}}
                                                                    {{--<span class="icofont icofont-social-facebook"></span>--}}
                                                                {{--</button>--}}
                                                                {{--<button type="button" data-toggle="tooltip" title="Twitter"--}}
                                                                        {{--class="btn btn-twitter btn-mini waves-effect waves-light">--}}
                                                                    {{--<span class="icofont icofont-social-twitter"></span>--}}
                                                                {{--</button>--}}
                                                                {{--<button type="button" data-toggle="tooltip" title="Linkedin"--}}
                                                                        {{--class="btn btn-linkedin btn-mini waves-effect waves-light">--}}
                                                                    {{--<span class="icofont icofont-brand-linkedin"></span>--}}
                                                                {{--</button>--}}
                                                                {{--<button type="button"  data-toggle="tooltip" title="Drible"--}}
                                                                        {{--class="btn btn-dribbble btn-mini waves-effect waves-light">--}}
                                                                    {{--<span class="icofont icofont-social-dribble"></span>--}}
                                                                {{--</button>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li class="">--}}
                                            {{--<div class="card list-view-media">--}}
                                                {{--<div class="card-block">--}}
                                                    {{--<div class="media">--}}
                                                        {{--<a class="media-left" href="#">--}}
                                                            {{--<img class="media-object card-list-img"--}}
                                                                 {{--src="../files/assets/images/avatar-3.jpg"--}}
                                                                 {{--alt="Generic placeholder image">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<div>--}}
                                                                {{--<h6 class="d-inline-block">--}}
                                                                    {{--Heading</h6>--}}
                                                                {{--<label class="label  label-info">Accountant</label>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="f-13 text-muted m-b-15">--}}
                                                                {{--Softwear Engineer--}}
                                                            {{--</div>--}}
                                                            {{--<p>Hi, This is my short intro text.--}}
                                                                {{--Lorem ipsum is a dummy content sit--}}
                                                                {{--dollar. You can copy and paste this--}}
                                                                {{--dummy content from anywhere and to--}}
                                                                {{--anywhere. Its all free and must be a--}}
                                                                {{--good to folllow in prectice</p>--}}
                                                            {{--<div class="m-t-15">--}}
                                                                {{--<button type="button" data-toggle="tooltip" title="Facebook"--}}
                                                                        {{--class="btn btn-facebook btn-mini waves-effect waves-light">--}}
                                                                    {{--<span class="icofont icofont-social-facebook"></span>--}}
                                                                {{--</button>--}}
                                                                {{--<button type="button" data-toggle="tooltip" title="Twitter"--}}
                                                                        {{--class="btn btn-twitter btn-mini waves-effect waves-light">--}}
                                                                    {{--<span class="icofont icofont-social-twitter"></span>--}}
                                                                {{--</button>--}}
                                                                {{--<button type="button" data-toggle="tooltip" title="Linkedin"--}}
                                                                        {{--class="btn btn-linkedin btn-mini waves-effect waves-light">--}}
                                                                    {{--<span class="icofont icofont-brand-linkedin"></span>--}}
                                                                {{--</button>--}}
                                                                {{--<button type="button"  data-toggle="tooltip" title="Drible"--}}
                                                                        {{--class="btn btn-dribbble btn-mini waves-effect waves-light">--}}
                                                                    {{--<span class="icofont icofont-social-dribble"></span>--}}
                                                                {{--</button>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- List view card end -->
                    </div>
                </div>
        </div>
                </div></div>
                </div>
    @endsection