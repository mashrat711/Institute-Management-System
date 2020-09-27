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
                        <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Border Table</a>
                        </li>
                    </ul>

                    <div class="box-tools pull-right">
                        <a class="btn btn-info btn-sm"
                           href="{{ URL::route('Notices.create') }}">
                            <i class="fa fa-plus-circle"></i> Add New</a>
                    </div>

                </div>
            </div>


            <!-- Page-header end -->
            @if(session('message'))
                <div class="alert alert-success"> {{session('message')}} </div>
            @endif
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger"> {{$error}} </div>
                @endforeach
            @endif


            <div class="card">
                <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr class="border-bottom-danger col-lg-12" >
                    <th>#</th>
                    <th>Title</th>
                    <th>Role</th>
                    {{--<th class="notexport" width="10%">Photo</th>--}}
                    <th>Time</th>
                    <th>Date</th>

                    {{--<th class="col-sm-4">Description</th>--}}
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notices as $notice)
                <tr class="border-bottom-primary">
                    <td>{{$notice->id}}</td>
                    <td>{{$notice->title}}</td>
                    <td>{{$notice->role}}</td>
                    {{--<td><img class="d-flex align-self-center img-radius"--}}
                             {{--src='{{asset("images/notice/$notice->photo")}}' alt=""></td>--}}
                    {{--<td><img class="d-flex align-self-center img-radius"--}}
                             {{--src="{{asset("images/notice/$notice->photo)}}"></td>--}}
                    <td>{{$notice->time}}</td>
                    <td>{{$notice->date}}</td>

                    {{--<td><p class="col-sm-4">{{$notice->description}}</p></td>--}}
                    <td>
                        <div class="btn-group">
                            <a title="Details"  href='{{route('Notices.show',$notice->id)}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a title="Edit" href="{{route('Notices.edit',$notice->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                        </div>
                        <!-- todo: have problem in mobile device -->
                        <div class="btn-group">
                            <form  class="myAction" method="POST" action="{{route('Notices.destroy',$notice->id)}}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fa fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </div>

                    </td>
                </tr>
@endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
 @endsection