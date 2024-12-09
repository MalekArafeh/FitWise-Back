@extends('userLayout.master')

@section('title')
  Full Schedule
@endsection

@section('css')
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fullcalendar/main.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
@endsection

@section('content')
  <section class="content" style="margin-top: 6%">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="sticky-top mb-3">
            <div class="card" style="display: none">
              <div class="card-header">
                <h4 class="card-title">Draggable Events</h4>
              </div>
              <div class="card-body">
                <div id="external-events">
                  <div class="external-event bg-success">Lunch</div>
                  <div class="external-event bg-warning">Go home</div>
                  <div class="external-event bg-info">Do homework</div>
                  <div class="external-event bg-primary">Work on UI design</div>
                  <div class="external-event bg-danger">Sleep tight</div>
                  <div class="checkbox">
                    <label for="drop-remove">
                      <input type="checkbox" id="drop-remove"> remove after drop
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-body p-0">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <!-- jQuery -->
  <script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- jQuery UI -->
  <script src="{{url('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('admin/dist/js/adminlte.min.js')}}"></script>
  <!-- fullCalendar -->
  <script src="{{url('admin/plugins/moment/locales.min.js')}}"></script>
  <script src="{{url('admin/plugins/fullcalendar/main.js')}}"></script>
   
  <script>
    $(document).ready(function () {
      var classes = @json($classes);
      // console.log(classes)
      function ini_events(ele) {
        ele.each(function () {
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          };
          $(this).data('eventObject', eventObject);
          $(this).draggable({
            zIndex        : 1070,
            revert        : true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          });
        });
      }

      ini_events($('#external-events div.external-event'))

      var Calendar = FullCalendar.Calendar;
      var Draggable = FullCalendar.Draggable;

      var containerEl = document.getElementById('external-events');
      var checkbox = document.getElementById('drop-remove');
      var calendarEl = document.getElementById('calendar');

      new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function(eventEl) {
          return {
            title: eventEl.innerText,
            backgroundColor: window.getComputedStyle(eventEl ,null).getPropertyValue('background-color'),
            borderColor: window.getComputedStyle(eventEl ,null).getPropertyValue('background-color'),
            textColor: window.getComputedStyle(eventEl ,null).getPropertyValue('color'),
          };
        }
      });

      var calendar = new Calendar(calendarEl, {
        headerToolbar: {
          left  : 'prev,next today',
          center: 'title',
          right : 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        themeSystem: 'bootstrap',
        events: classes,
        editable  : true,
        droppable : true, // this allows things to be dropped onto the calendar !!!
        drop      : function(info) {
          if (checkbox.checked) {
            info.draggedEl.parentNode.removeChild(info.draggedEl);
          }
        }
      });

      calendar.render();

      var currColor = '#3c8dbc'; //Red by default
      $('#color-chooser > li > a').click(function (e) {
        e.preventDefault();
        currColor = $(this).css('color');
        $('#add-new-event').css({
          'background-color': currColor,
          'border-color'    : currColor
        });
      });

      $('#add-new-event').click(function (e) {
        e.preventDefault();
        var val = $('#new-event').val();
        if (val.length == 0) {
          return;
        }

        var event = $('<div />');
        event.css({
          'background-color': currColor,
          'border-color'    : currColor,
          'color'           : '#fff'
        }).addClass('external-event');
        event.text(val);
        $('#external-events').prepend(event);
        ini_events(event);
        $('#new-event').val('');
      });
    });
  </script>
@endsection
