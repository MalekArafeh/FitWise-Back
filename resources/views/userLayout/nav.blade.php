<!--Nav bar layout-->

<header>
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
                  <a class="dropdown-item" href="{{ route('profile.show', ['id' => Auth::guard('gym_members')->user()->id]) }}"
                    >Profile</a
                  >
                </li>
                <li><a class="dropdown-item" href="#">About us</a></li>
                <li><a class="dropdown-item" href="#">Lanhuage</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item red-text" href="{{route('user.logout')}}">Sign out</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="{{ route('home', ['id' => Auth::guard('gym_members')->user()->id]) }}"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('health', ['id' => Auth::guard('gym_members')->user()->id]) }}"
                >Health</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- <span class="headings" id="greeting">Hello user</span> --}}
    <span class="headings" id="greeting">Hello {{Auth::guard('gym_members')->user()->name}}</span>

</header>