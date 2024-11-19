<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Health</title>
  </head>
  <body></body>
</html>
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
    <link rel="stylesheet" href="{{asset('user/css/root.css')}}" />
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
                <a class="nav-link active" href="{{url('/health')}}"
                  >Health</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <br>
    <!--end nav bar-->

    <!--page content-->
    <!--Tabs-->
    <div class="hide-on-lg">
      <div class="tabs">
        <button
          id="defaultTab"
          onclick="showCalc(event, 'calsCalc')"
          class="btn text option"
        >
          Calories
        </button>
        <button onclick="showCalc(event, 'prtnCalc')" class="btn text option">
          Protein
        </button>
      </div>
    </div>

    <!--menu-->
    <div class="row margin-bottom">
      <div class="col-md-2 center-menu">
        <div class="calculators-menu">
          <p class="blk-text headings">Choose Calculator</p>
          <a
            id="defaultOption"
            onclick="showCalc(event, 'calsCalc')"
            class="text no-link option"
            >Calories Calculator <span class="icon mg"></span></a
          >
          <a onclick="showCalc(event, 'prtnCalc')" class="text no-link option"
            >Protein Calculator <span class="icon mg"></span></a
          >
        </div>
      </div>

      <!--first calc-->
      <div id="prtnCalc" class="col-md-5 col-10 center-block calc">
        <div class="blk-text content">
        <h3>Fuel Your Fitness Journey with Protein</h3>
        <p>
          Calculate how much protein you need to fuel your workouts, boost
          recovery, and build strength. Scroll down to find out your ideal daily
          intake!
          <h4> Protein Content per Serving Examples: </h4>
                    🥚 Egg - 6g protein per egg
                    🐔 Chicken Breast - 31g per 3.5 ounces
                    🌱 Lentils - 18g per cup
                    🥛 Greek Yogurt - 10g per 100g
        </p>
      </div>
        <div class="linear calculator">
          <p class="headings blk-text vertical-margin">Protein Calculator</p>
          <form>
            <input type="text" placeholder="Weight" />
            <input type="text" placeholder="Height" />
            <input type="number" placeholder="Age" />
            <select name="Gender" id="gender">
              <option value="">Gender</option>
              <option value="female">Female</option>
              <option value="male">Male</option>
            </select>
            <select name="Goal" id="goalP">
              <option value="">Goal</option>
              <option value="loss">Weight loss</option>
              <option value="gain">Weight gain</option>
              <option value="maintain">Maintain weight</option>
            </select>
            <select name="Activity level" id="activity">
              <option value="">Activity level</option>
              <option value="moderate">Moderatly active</option>
              <option value="none">Not active</option>
              <option value="light">Lightly active</option>
              <option value="very">Very active</option>
            </select>
          </form>
          <button id="proteinCalc" class="btn btn-warning text vertical-margin">
            Calculate
          </button>
        </div>
      </div>
      <div id="protein" class="col-md-2 center-menu">
        <div class="gradient-border">
        <span
          >Your Daily Protein Needs Are Set! 💪 <br>
           Aim for [grams of protein] grams of protein each day. Protein is key to fueling your energy and recovery, so let’s keep you powered up and on track!!</span
        >
      </div>
    </div>

      <!--Second calculator-->
      <div id="calsCalc" class="col-md-5 col-10 center-block calc">
        <div class="blk-text content">
          <h3>Find Your Optimal Calorie Intake</h3>
          <p>
            Calories are the fuel that powers everything you do, from thinking and walking to building muscle. Balancing your intake is key to maintaining energy and reaching your goals.
            Use our calculator to set your daily calorie goal and achieve a healthy balance. Ready to find out?
            <h4> Visual Guide to Calorie-Burning Activities: </h4>
            Calorie Burn per 30 minutes:
            🏃 Running - Approx. 300 calories
            🚴 Cycling - Approx. 200 calories
            🧹 House Cleaning - Approx. 100 calories
          </p>
        </div>
        <div class="radial calculator">
          <p class="headings blk-text vertical-margin">Calories Calculator</p>
          <form>
            <input type="text" placeholder="Weight" />
            <input type="text" placeholder="Height" />
            <input type="number" placeholder="Age" />
            <select name="Gender" id="gender">
              <option value="">Gender</option>
              <option value="female">Female</option>
              <option value="male">Male</option>
            </select>
            <select name="Goal" id="goal">
              <option value="">Goal</option>
              <option value="loss">Weight loss</option>
              <option value="gain">Weight gain</option>
              <option value="maintain">Maintain weight</option>
            </select>
            <select name="Activity level" id="activity">
              <option value="">Activity level</option>
              <option value="moderate">Moderatly active</option>
              <option value="none">Not active</option>
              <option value="light">Lightly active</option>
              <option value="very">Very active</option>
            </select>
          </form>
          <button id="caloriesCalc" class="btn btn-warning text vertical-margin">
            Calculate
          </button>
        </div>
      </div>
      <div id="calories"  class="col-md-2 center-menu">
        <div class="gradient-border">
          <span
            >Here’s Your Daily Calorie Target! 🌟 <br>
            To support your gaol and reach balanced energy levels, aim for [calculated calories] calories each day. Tracking your intake can help you stay on course and see steady progress. Let’s keep the momentum going!</span
          >
        </div>
      </div>
    </div>
    <!--end page content-->

    <!--footer-->
    <footer class="linear-bottom-top">
      <p class="headings blk-text">Contacts</p>
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
    <!--end footer-->

    @section('scripts')
    <script src="{{asset('user/js/script.js')}}"></script>
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