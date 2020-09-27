<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigation-label">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{'dashboard' == request()->path() ? 'active' :''}}">
                <a href="/dashboard">
                    <span class="pcoded-micon"><i class="fa fa-user"></i><b>P</b></span>
                    <span class="pcoded-mtext">Dashboard</span>

                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu {{'student.create' == request()->path() ? 'active' :''}}">
                <a href="{{route('student.create')}}">
                    <span class="pcoded-micon"><i class="fa fa-file-text"></i><b>P</b></span>
                    <span class="pcoded-mtext">Admission</span>
                    <span class="pcoded-mcaret"></span>
                </a>

            </li>
            <li class="pcoded-hasmenu {{'student' == request()->path() ? 'active' :''}}">
                <a href="/student">
                    <span class="pcoded-micon"><i class="fa fa-user"></i><b>P</b></span>
                    <span class="pcoded-mtext">Student</span>
                    <span class="pcoded-badge label label-warning">NEW</span>
                    <span class="pcoded-mcaret"></span>
                </a>

            </li>
            {{--<li class="">--}}
                {{--<a href="navbar-light.html">--}}
                    {{--<span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>--}}
                    {{--<span class="pcoded-mtext">Navigation</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li>--}}
            @can('teacher')
            <li class="{{'Teacher' == request()->path() ? 'active' :''}}">
                <a href="/Teacher">
                    <span class="pcoded-micon"><i class="fa fa-users"></i><b>N</b></span>
                    <span class="pcoded-mtext">Teacher</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endcan
            @can('calender')
            <li class="{{'Calender' == request()->path() ? 'active' :''}}">
                <a href="/Calender">
                    <span class="pcoded-micon"><i class="ti-calendar"></i><b>N</b></span>
                    <span class="pcoded-mtext">Calender</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endcan
            @can('routine')
            <li class="{{'Routine' == request()->path() ? 'active' :''}}">
                <a href="/Routine">
                    <span class="pcoded-micon"><i class="fa fa-bookmark"></i><b>N</b></span>
                    <span class="pcoded-mtext">Class Routine</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endcan
            <li class="{{'classes' == request()->path() ? 'active' :''}}">
                <a href="/classes">
                    <span class="pcoded-micon"><i class="fa fa-book"></i><b>N</b></span>
                    <span class="pcoded-mtext">Courses</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{'Notices' == request()->path() ? 'active' :''}}">
                <a href="/Notices">
                    <span class="pcoded-micon"><i class="fa fa-comment"></i><b>N</b></span>
                    <span class="pcoded-mtext">Notice</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li><li class="{{'Schedule' == request()->path() ? 'active' :''}}">
                <a href="/Schedule">
                    <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                    <span class="pcoded-mtext">Schedule</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
@can('attendance')
        <div class="pcoded-navigation-label">Attendances</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="pcoded-hasmenu {{'attendences' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-file-text"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Attendances</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'attendences.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('attendences.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">All Attendance</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'attendences.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('attendences.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Take Attendance</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        @endcan

        <div class="pcoded-navigation-label">Exams & results</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="pcoded-hasmenu {{'exams' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-crown"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Exams & results</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'exams.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('exams.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Exam</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'results.index' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('results.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Results</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
@can('userManagement')
        <div class="pcoded-navigation-label">User Management</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{'users' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-pencil-square-o"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Users</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'users.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('users.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Users List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" {{'users.create' == request()->path() ? 'active' :''}}">
                        <a href="{{route('users.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create User</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu {{'roles' == request()->path() ? 'active' :''}} ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-pencil-square-o"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Roles</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{'roles.index' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('roles.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Role List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'roles.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('roles.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create roles</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu {{'permissions' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-pencil-square-o"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Permissions</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'permissions.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('permissions.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Permissions</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'permissions.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('permissions.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Manage Permissions</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    @endcan










    </div>

</nav>