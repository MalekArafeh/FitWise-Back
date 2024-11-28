@extends('userLayout.master')

@section('title')
  Profile
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
  <style></style>
@endsection

  <!--page content-->
  @section('content')
    <div class="container d-flex justify-content-center ">
      <div class="box ">
        <div class="details d-flex justify-content-center">
          <img src="{{asset('img/profile.jpg')}}" alt=""> 
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
        </div>  
      </div>
    </div>
@endsection

@section('scripts')
@endsection