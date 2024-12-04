<!--Footer layout-->

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
  <!--End footer layout-->

  <!--App JavaScript-->
  <script
      src="https://kit.fontawesome.com/d2ac08e343.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  @yield('scripts')