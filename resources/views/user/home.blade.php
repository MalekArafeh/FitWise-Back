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
    </div><span id="percent"></span>
  </section>
  <br />
  <section class="margin-top">
    <div class="row">
      <div class="col-md-5 col-11 radial center-block">
        <span class="headings col">Memberships</span>
        @foreach ($plans as $plan)
        <div class="row">
          <div class="col-8">
            <div class="dark-border row">
              <span class="headings">{{$plan->plan_Name}}</span>
              <br/>
              <span class="text"
                ><i class="fa-solid fa-calendar blk-text"></i> Expires in
                {{$plan->plan_Period}} month from {{$member->date_of_join}}</span>
            </div>
          </div>
          <div class="col center-left">
            <button class="btn btn-warning" onclick="showPlanDetails({{$plan->id}})">View</button>
          </div>
        </div>
        @endforeach
        {{-- <div class="row">
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
        </div> --}}
      </div>
      <div class="col-md-5 col-11 radial center-block">
        <div class="row">
          <span class="headings col">Upcoming Classes</span>
          <a
            href="{{route('user.schedule.index')}}"
            class="col center-left blk-text text"
            ><i
              class="fa-solid fa-calendar blk-text"
              style="margin-right: 5px"
            ></i>
            See full schedule</a
          >
        </div>
        @foreach($classes as $class)
          <div class="dark-border row">
            <div class="col-8">
              <span class="headings">{{$class->Name}} with {{$class->trainers->first()->Name}}</span>
              <br />
              <span class="text"
                >From {{$class->start_time}} to {{$class->end_time}}</span
              >
            </div>
            <span class="col text center-left">{{$class->date}}</span>
          </div>
        @endforeach  
        {{-- <div class="dark-border row">
          <div class="col-8">
            <span class="headings">Kick Boxing with coach Tamara</span>
            <br />
            <span class="text"
              >from 2:00 PM to 3:00 PM - Mind and Body studio</span
            >
          </div>
          <span class="col text center-left">Tomorrow</span>
        </div> --}}
      </div>
    </div>
  </section>
  <br />
  <section>
    <div class="banner center-block">
      <img src="{{asset('img/promo2.png')}}" alt="" class="banner-img" />
    </div>
  </section>

  <div id="view-membership-popup">
    <div class="popup-membership-content">
      <h5>Plan</h5>
      <p id="planName"></p>
      <h5>Price</h5>
      <p id="planPrice"></p>
      <h5>Period</h5>
      <p id="planPeriod"></p>
      <h5>Description</h5>
      <p id="planDescription"></p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('user/js/home.js')}}"></script>
@endsection