@extends('userLayout.master')

@section('title')
  Home
@endsection

@section('css')
  <style></style>
@endsection

<!--Page content-->
@section('content')
  <section class="status">
    <div><i class="fa-solid fa-dumbbell status-icon"></i></div>
    <br />
    <div class="full bar">
      <div class="busyness bar"></div> 
    </div>
  </section>

  <br />
  <section class="margin-top">
    <div class="row">
      <div class="col-md-5 col-11 radial center-block">
        <span class="headings col">Memberships</span>
        <div class="row">
          <div class="col-8">
            <div class="dark-border row">
              <span class="headings">Pool Membership</span>
              <br />
              <span class="text"
                ><i class="fa-solid fa-calendar blk-text"></i> Expires on
                11/10/2024</span
              >
            </div>
          </div>
          <div class="col center-left">
            <button class="btn btn-warning">View</button>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="dark-border row">
              <span class="headings">Gym Membership</span>
              <br />
              <span
                ><i class="fa-solid fa-triangle-exclamation red-text"></i>
                Expired</span
              >
            </div>
          </div>
          <div class="col center-left">
            <button class="btn btn-danger">View</button>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-11 radial center-block">
        <div class="row">
          <span class="headings col">Upcoming Classes</span>
          <a
            href="{{asset('/schedule')}}"
            class="col center-left blk-text text"
            ><i
              class="fa-solid fa-calendar blk-text"
              style="margin-right: 5px"
            ></i>
            See full schedule</a
          >
        </div>
        <div class="dark-border row">
          <div class="col-8">
            <span class="headings">Body Combat with Coach Naser</span>
            <br />
            <span class="text"
              >From 5:00 PM to 6:00 PM - Main GGX studio</span
            >
          </div>
          <span class="col text center-left">Today</span>
        </div>
        <div class="dark-border row">
          <div class="col-8">
            <span class="headings">Kick Boxing with coach Tamara</span>
            <br />
            <span class="text"
              >from 2:00 PM to 3:00 PM - Mind and Body studio</span
            >
          </div>
          <span class="col text center-left">Tomorrow</span>
        </div>
      </div>
    </div>
  </section>
  <br />
  <section>
    <div class="banner center-block">
      <img src="{{asset('img/promo2.png')}}" alt="" class="banner-img" />
    </div>
  </section>
@endsection

@section('scripts')
  <script src="{{asset('user/js/home.js')}}" defer></script>
@endsection