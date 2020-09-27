@extends('Backend.Calendar.main')
@section('content')

    <div class="col-md-8 mx-auto my-4">
        @can('addEvent')
        <div class="row">
            <a href="{{route('events.create')}}" class="btn btn-success">Add Event</a>
        </div>
        @endcan
        <br>

        <div id="calendar">

        </div>
    </div>
    @endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');

            const calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid'  ,'interaction'],
                header:{
                    left:'prevYear,prev,next,nextYear,today',
                    center:'title',
                    right:'dayGridMonth,dayGridWeek,dayGridDay'

                },
                defaultDate:'{{date('Y-m-d')}}',
                navLinks:true,
                editable:true,
               // selectable:true,
                eventLimit:true,
                events:'/events',
                eventClick: function (info) {
                    alert(info.event.title);

                },
                select:function (selectionInfo) {
                    let title = prompt("Give title here");
                    let formatted_start_date = selectionInfo.start.getFullYear() + '-' + (selectionInfo.start.getMonth() + 1) + '_' + selectionInfo.start.getDate()
                            + "" + selectionInfo.start.getHours() + ":" + selectionInfo.start.getMinutes() + ":" + selectionInfo.start.getSeconds();

                    //alert(formatted_start_date);
                    let formatted_end_date = selectionInfo.end.getFullYear() + '-' + (selectionInfo.end.getMonth() + 1) + '_' + selectionInfo.end.getDate()
                            + " " + selectionInfo.end.getHours() + ":" + selectionInfo.end.getMinutes() + ":" + selectionInfo.end.getSeconds();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
//                    $.ajax({
//                        type: 'post',
//                        url: '/events',
//                        dataType: 'json',
//                        //url: SITEURL + "/EventController/create",
//                        data: {
//                            title: title,
//                            start: formatted_start_date,
//                            end: formatted_end_date
//                        },
//                        success: function () {
//                            Swal.fire({
//                                position: 'center',
//                                icon: 'success',
//                                title: 'confirmed',
//                                showConfirmationButton: false,
//                                timer: 1500
//
//                            });
//                        }//sucess
//                    }); // ajax
                    location.reload();
                }
            });
            calendar.setOption('locale' );
            calendar.render();
            document.querySelector('.fc-dayGridMonth-Button');
            document.querySelector('.fc-dayGridWeek-Button');
            document.querySelector('.fc-dayGridDay-Button');
            document.querySelector('.fc-today-Button');

        });
    </script>
    @endsection