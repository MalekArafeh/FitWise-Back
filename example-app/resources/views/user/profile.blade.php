<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
    <link rel="stylesheet" href="{{asset('user/style.css')}}">
  </head>
  <body>
    <!--nav bar wave design-->
    <section>
    <section>
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
                    <a class="dropdown-item" href="{{url('/profile')}}"
                      >Profile</a
                    >
                  </li>
                  <li><a class="dropdown-item" href="#">About us</a></li>
                  <li><a class="dropdown-item" href="#">Lanhuage</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item red-text" href="{{url('/login')}}">Sign out</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active"
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
      <span class="headings" id="greeting">Hello user</span>
    </section>
    <!--end nav bar-->

    <!--page content-->
    <div class="container d-flex justify-content-center ">
      <div class="box ">
        <div class="details d-flex justify-content-center">
          <img src="profile.jpg" alt=""> 
          <div class=" mt-5">First name last name</div> 
        </div>
        
        <div class="d-flex  justify-content-center pt-5">
          
        <div class="weight p-3">
          current Weight: <br>XX Kg
        </div>
        <div class="height p-3">Current height <br> XXX Cm </div>
      </div>

      <div class="email text-center">Email: example@fitwise.com </div> 
    <div class="buttons d-flex justify-content-center mt-5">
      <button type="button" class="btn btn-warning mb-2"><a class="nav-link p-1" href="">Edit</a></button>
      <button type="button" class="btn btn-warning mb-2"><a class="nav-link p-1" href="">Save</a></button>

    </div>  </div>
    </div>
   
    <footer class="linear-bottom-top">
      <p class="headings blk-text">contacts</p>
      <div>
        <img
          src="{{asset('img/logo.svg')}}"
          alt=""
          class="footer-margins hide-on-sm"
        />
        <i
          class="fa-brands fa-square-facebook fa-xl footer-margins blk-text"
        ></i>
        <i
          class="fa-brands fa-square-instagram fa-xl footer-margins blk-text"
        ></i>
        <i class="fa-brands fa-linkedin fa-xl footer-margins blk-text"></i>
      </div>
      <br />

      <span class="footer-margins"
        ><i class="fa-solid fa-phone fa-xl footer-margins"></i>
        +9627XXXXXXX</span
      >

      <span class="footer-margins"
        ><i class="fa-solid fa-envelope fa-xl footer-margins"></i>
        info@xxxxx.com</span
      >

      <span class="footer-margins"
        ><i class="fa-solid fa-location-dot fa-xl footer-margins"></i> Al Razi
        St. 141, Amman</span
      >
      <hr class="hide-on-lg" />
      <hr class="hide-on-lg" />
      <span class="center-block">
        <img
          src="{{asset('img/logo.svg')}}"
          alt=""
          class="hide-on-lg"
        />
      </span>
    </footer>
   
    <!--end page content-->

    <!--footer-->
    <!--<footer class="linear-bottom-top">
      
      

      

      
      
      <span class="center-block">
        <img
          src="/assets/Green Modern Fitness App Logo (6) 2-2.svg"
          alt=""
          class="hide-on-lg"
        />
      </span>
    </footer>
    <!--end footer-->

    <script
      src="https://kit.fontawesome.com/d2ac08e343.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>