@include('Backend.elements.header')

<!--body-->
@include('Backend.elements.preloader')

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('Backend.elements.nav_profile')
        @include('Backend.elements.sidebar_chat')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

         @include('Backend.elements.navigation')

        </div>

            @yield('dashboard')
            @yield('show')
            @yield('teacher')
            @yield('teacher_profile')
            @yield('student_content')
            @yield('student_view_content')
            @yield('student_create_content')
            {{--//@yield('content')--}}
            @yield('notice')

       </div>
       </div>
       </div>
@include('Backend.elements.Warning')
@include('Backend.elements.footer')
