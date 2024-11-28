<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitWise-Registeration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">   
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{url('user/css/Registration.css') }}">

    
    
</head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary  p-0 ">
        <div class="container-fluid  ">
          <a class="navbar-brand" href="">    <img src="{{ asset('img/Registration/logo.png') }}" class="photo" id="image" alt="sport0"></a>
          <p>STAMINA<br>
            FITNESS</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="V" alt="" srcset=""></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="#about" class="nav-link " aria-current="page" href="#">About</a>
              </li>
             
              
              <li class="nav-item">
                <a class="nav-link " href="#plan">Plan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#coaches">Coaches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#visit">Visit our Gym</a>
              </li>
              <li class="nav-item">
                <button type="button" class="btn btn-warning mb-2"><a class="nav-link p-0" href="{{url('/login')}}">Login</a></button>

              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>

      <div class="grid-container">
        <div class="gradiant">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12 mb-2 item2 "> <p>
          Start a better shape of you!<span><br>Come Join Us!</span>
           </p>
          <button type="button" class="btn btn-warning mt-4" onclick="openPopup()">Register</button>
          <div class="popup" id="popup">
            <div class="popup-cuntentmm">

              <img src="{{ asset('img/Registration/Green Modern Fitness App Logo (6) .png') }}" alt="">
              <h4>Register</h4>
              <form action="/" method="POST">
               @csrf
                <div class="popupform">
                <div>
                    <label for="">First Name</label>
                    <input type="text" name="mem_name" class="inputpopup">
                    <label for="">Last Name</label>
                    <input type="text" class="inputpopup">

                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name='mem_mail'class="inputpopup">
                    <label for="">Phone</label>
                    <input type="TEL" name='mem_phone' class="inputpopup">

                </div>
            </div>
            <div class="popupform">
                
                <div>
                    <br>
                    <button type="submit" class="btn btn-light butsub" >Submit </button>
                    <button type="button" class="btn btn-light butformcancel" id="close" onclick="closePopup()">Cancel </button>

                </div>
            </div>
         

              

              </form>
              

              
            </div>
          </div>
       
        
         

       </div>
          <div class="col-md-6 mb-3 item1 "> <img src="{{ asset('img/Registration/Green Modern Fitness App Logo (6) .png') }}" alt="" srcset="">
          </div>
          </div>
        </div>  
          </div>
       
          
          
      </div>
      
       <div class="about mr-0" id="about">
        <div class="container">
      
          <div class="text-center">About<span><br>STAMINA GYM FOR MAN & WOMAN</span>
            <div class="description pt-5">Stamina Gym Fitness Center provides proper training<br> and conditioning for members who want to improve and<br> transform their body with Program depend on the body<br> composition.</div>
           <div class="pt-5">What we offer :</div> 

          </div>
          
          <div class="row pt-5 mr-0 justify-content-center">
              <div class="col-md-3 col-sm-12 pt-5 justify-content-center d-flex"><img src="{{ asset('img/Registration/Group offericon0.png') }}"  alt="" srcset=""></div>
              <div class="col-md-3 col-sm-12 pt-5 d-flex justify-content-center "><img src="{{ asset('img/Registration/OfferIcon1.png') }}" alt="" srcset=""></div>
              <div class="col-md-3 col-sm-12 pt-5 d-flex justify-content-center"><img src="{{ asset('img/Registration/OfferIcon2.png') }}" alt="" srcset=""></div>

      
              </div>
          </div>
          <div class="dambles">
                          <img src="{{ asset('img/Registration/dambles.png') }}" class=" d-none d-md-block" alt="" srcset="">


          </div>

         
            

       
      </div>

      <div class="plans pt-5" id="plan">
        <div class="container">
          <div class="vec1">
            <div class="vec2 pb-5">

            <div class="text-right pb-4">JOIN OUR MEMBERSHIP</div>
            <div class="text-left d-block  d-md-block pb-4">Our Plan:</div>

            
            
            
          </div>
        </div>
        <div class="row m-0 gap-3 pb-5 d-flex justify-content-center">
          <div class="col-lg-2 col-md-4 col-sm-3 d-flex justify-content-center "><img src="{{ asset('img/Registration/plans22.png') }}"  alt="" srcset=""></div>
          <div class="col-lg-2 col-md-4  col-sm-3 d-flex justify-content-center"><img src="{{ asset('img/Registration/plans33.png') }}"  alt="" srcset=""></div>
          <div class="col-lg-2 col-md-4  col-sm-3 d-flex justify-content-center" ><img src="{{ asset('img/Registration/plans44.png') }}" alt="" srcset=""></div>
          <div class="col-lg-2 col-md-4 col-sm-4 d-flex justify-content-center"><img src="{{ asset('img/Registration/plans55.png') }}"  alt="" srcset=""></div>
          <div class="col-lg-2 col-md-4 col-sm-4 d-flex justify-content-center "><img src="{{ asset('img/Registration/plans11.png') }}"  alt="" srcset=""></div>


        
        </div>
       
      </div>
        

       
      
    </div>

    <div class="coaches" id="coaches">
      <div class="container pb-4">
        <div class="text-center">
          <p>COACHES</p>
        </div>
        <div class="row  d-flex justify-content-center align-items-center pt-5 ">
          <div class="col-lg-4 col-sm-12 d-flex justify-content-center pb-5 mb-3">
            <div class="card pb-4" style="width: 16rem;">
              <img src="{{ asset('img/Registration/coach1.png') }}" class="card-img-top coach1" alt="coach">
              <div class="card-body pb-5">
                <h5 class="card-title">Malek Arafeh</h5>
                <p class="card-text">The world's first in the field of physical fitness</p>
              </div>
              
              
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 d-flex justify-content-center align-items-center mb-5">
            <div class="card pb-4 mb-3" style="width: 16rem;">
              <img src="{{ asset('img/Registration/coach1.png') }}" class="card-img-top coach1" alt="coach">
              <div class="card-body pb-5">
                <h5 class="card-title">Malek Arafeh</h5>
                <p class="card-text">The world's first in the field of physical fitness</p>
              </div>
              
              
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 d-flex justify-content-center align-items-center mb-5">
            <div class="card  pb-4" style="width: 16rem;">
              <img src="{{ asset('img/Registration/coach1.png') }}" class="card-img-top coach1" alt="coach">
              <div class="card-body pb-5">
                <h5 class="card-title">Malek Arafeh</h5>
                <p class="card-text">The world's first in the field of physical fitness</p>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="visit pb-5" id="visit">
      <div class="container">

           
          
            <div class="heading pt-5">
              VISIT OUR GYM
            </div>
            <div class="bord mb-5 pb-5">
              <div class="address">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
                : 12TH ST. GENERAL MATHA VILLAMOR AIR BASE PASAY CITY  
            <span><br> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="White" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
              </svg>
            </span>
               : Martell008@yahoo.com
              <span><br>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="White" class="bi bi-phone" viewBox="0 0 16 16">
                  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                </svg>
              </span> : 09260417050
              <br>
              <div class="social">OUR SOCIALS:</div>
              <div class="social d-flex justify-content-center pt-3">
                <div class="p-3"><img src=" {{ asset('img/Registration/facebookicon.png') }}" alt="" srcset=""></div>
                <div class="p-3"><img src="{{ asset('img/Registration/messengericon.png') }}" alt="" srcset=""></div>
                <div class="p-3"><img src="{{ asset('img/Registration/instaicon.png') }}" alt="" srcset=""></div>                
              </div>
              
              <button type="button" class="btn btn-light" ><a href="https://www.google.com/maps/@31.9614217,35.8961275,13z?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D">See our Location</a> </button>


              </div>


            </div>
            </div>
            
          
        
      </div>


      <footer class="linear-bottom-top">
        <p class="headings blk-text">Contacts</p>
        <div>
          <img
            src="{{ asset('img/Registration/logo.png') }}"
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
            src="{{ asset('img/Registration/logo.png') }}"
            alt=""
            class="hide-on-lg"
          />
        </span>
      </footer>

    <script src="{{ asset('user/js/Registration.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
 
 
    <script
    src="https://kit.fontawesome.com/d2ac08e343.js"
    crossorigin="anonymous"
  ></script>
  
 
 
  </body>
</html>