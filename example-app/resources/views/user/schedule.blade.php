<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Full Scehdule</title>
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="{{asset('css/all.min.css')}}"
    />
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('user/root.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--nav bar wave design-->
    <section class="sticky">
      <svg class="svg-bg" viewBox="0 0 500 200">
        <path
          d="M 0 50 C 150 100 350 0 500 40 L 500 0 L 0 0 Z"
          fill="url(#grad1)"
        ></path>
        <defs>
          <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color: #c9e983; stop-opacity: 1" />
            <stop offset="100%" style="stop-color: #729788; stop-opacity: 1" />
          </linearGradient>
        </defs>
      </svg>
      <!--end nav bar wave design-->
      <!--nav bar -->
      <nav class="navbar navbar-expand-lg navbar-index">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/home')}}">
            <img
              src="{{asset('img/logo.svg')}}"
              alt="Logo"
              width="30"
              height="24"
              class="d-inline-block align-text-top"
            />
            FitWise
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse ms-lg-5"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="fa-solid fa-bell"></i
                ></a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  More
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="/profile-user/index.html"
                      >Profile</a
                    >
                  </li>
                  <li><a class="dropdown-item" href="#">About us</a></li>
                  <li><a class="dropdown-item" href="#">Language</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item red-text" href="#">Sign out</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="{{url('/home')}}"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/health')}}"
                  >Health</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <span class="headings" id="title">Full Schedule</span>
    </section>
    <!--end nav bar-->

    <section class="content" style="margin-top: 13%">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card" style="display: none">
                <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-success">Lunch</div>
                    <div class="external-event bg-warning">Go home</div>
                    <div class="external-event bg-info">Do homework</div>
                    <div class="external-event bg-primary">
                      Work on UI design
                    </div>
                    <div class="external-event bg-danger">Sleep tight</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove" />
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-6 index">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar" class="center-block"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <script
      src="https://kit.fontawesome.com/d2ac08e343.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- jQuery -->
    <script src="/Admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery UI -->
    <script src="/Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/Admin/dist/js/adminlte.min.js"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="/Admin/plugins/moment/moment.min.js"></script>
    <script src="/Admin/plugins/fullcalendar/main.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/Admin/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
        /* initialize the external events
     -----------------------------------------------------------------*/
        function ini_events(ele) {
          ele.each(function () {
            // create an Event Object (https://fullcalendar.io/docs/event-object)
            // it doesn't need to have a start or end
            var eventObject = {
              title: $.trim($(this).text()), // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data("eventObject", eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
              zIndex: 1070,
              revert: true, // will cause the event to go back to its
              revertDuration: 0, //  original position after the drag
            });
          });
        }

        ini_events($("#external-events div.external-event"));

        /* initialize the calendar
     -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
          m = date.getMonth(),
          y = date.getFullYear();

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendar.Draggable;

        var containerEl = document.getElementById("external-events");
        var checkbox = document.getElementById("drop-remove");
        var calendarEl = document.getElementById("calendar");

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
          itemSelector: ".external-event",
          eventData: function (eventEl) {
            return {
              title: eventEl.innerText,
              backgroundColor: window
                .getComputedStyle(eventEl, null)
                .getPropertyValue("background-color"),
              borderColor: window
                .getComputedStyle(eventEl, null)
                .getPropertyValue("background-color"),
              textColor: window
                .getComputedStyle(eventEl, null)
                .getPropertyValue("color"),
            };
          },
        });

        var calendar = new Calendar(calendarEl, {
          headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay",
          },
          themeSystem: "bootstrap",
          //Random default events
          events: [
            {
              title: "All Day Event",
              start: new Date(y, m, 1),
              backgroundColor: "#f56954", //red
              borderColor: "#f56954", //red
              allDay: true,
            },
            {
              title: "Long Event",
              start: new Date(y, m, d - 5),
              end: new Date(y, m, d - 2),
              backgroundColor: "#f39c12", //yellow
              borderColor: "#f39c12", //yellow
            },
            {
              title: "Meeting",
              start: new Date(y, m, d, 10, 30),
              allDay: false,
              backgroundColor: "#0073b7", //Blue
              borderColor: "#0073b7", //Blue
            },
            {
              title: "Lunch",
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false,
              backgroundColor: "#00c0ef", //Info (aqua)
              borderColor: "#00c0ef", //Info (aqua)
            },
            {
              title: "Birthday Party",
              start: new Date(y, m, d + 1, 19, 0),
              end: new Date(y, m, d + 1, 22, 30),
              allDay: false,
              backgroundColor: "#00a65a", //Success (green)
              borderColor: "#00a65a", //Success (green)
            },
            {
              title: "Click for Google",
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: "https://www.google.com/",
              backgroundColor: "#3c8dbc", //Primary (light-blue)
              borderColor: "#3c8dbc", //Primary (light-blue)
            },
          ],
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar !!!
          drop: function (info) {
            // is the "remove after drop" checkbox checked?
            if (checkbox.checked) {
              // if so, remove the element from the "Draggable Events" list
              info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
          },
        });

        calendar.render();
        // $('#calendar').fullCalendar()

        /* ADDING EVENTS */
        var currColor = "#3c8dbc"; //Red by default
        // Color chooser button
        $("#color-chooser > li > a").click(function (e) {
          e.preventDefault();
          // Save color
          currColor = $(this).css("color");
          // Add color effect to button
          $("#add-new-event").css({
            "background-color": currColor,
            "border-color": currColor,
          });
        });
        $("#add-new-event").click(function (e) {
          e.preventDefault();
          // Get value and make sure it is not null
          var val = $("#new-event").val();
          if (val.length == 0) {
            return;
          }

          // Create events
          var event = $("<div />");
          event
            .css({
              "background-color": currColor,
              "border-color": currColor,
              color: "#fff",
            })
            .addClass("external-event");
          event.text(val);
          $("#external-events").prepend(event);

          // Add draggable funtionality
          ini_events(event);

          // Remove event from text input
          $("#new-event").val("");
        });
      });
    </script>
  </body>
</html>
