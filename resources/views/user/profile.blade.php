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
        <img src="{{ $gym_member->picture ? asset('storage/' . $gym_member->picture) : asset('img/profile.jpg') }}" 
     alt="Profile Picture" 
     class="img-fluid rounded-circle">
          {{-- <img src="{{asset('img/profile.jpg')}}" alt="">  --}}
          <div class=" mt-5"> {{$gym_member->name}}</div> 
          
        </div>
        <div class="d-flex  justify-content-center pt-5">
          <div class="weight p-3">
            current Weight: <br>{{$gym_member->weight}} Kg
          </div>
          <div class="height p-3">Current height <br> {{$gym_member->height}} Cm </div>
        </div>
        <div class="email text-center">Email: {{$gym_member->email}} </div> 
<!-- الزر لفتح النافذة المنبثقة -->


<!-- النافذة المنبثقة -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- نموذج التعديل -->
        <form id="editProfileForm" action="{{ route('profile.update', ['id' => $gym_member->id]) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          
          <div class="mb-3">
            <label for="profileImage" class="form-label">Profile Image</label>
            <input type="file"name="picture" class="form-control" id="profileImage" >
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $gym_member->name }}">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $gym_member->email }}"disabled>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">weight</label>
            <input type="tel" class="form-control" id="weight" name="weight" value="{{ $gym_member->weight }}" >
          </div>

          <div class="mb-3">
            <label for="height" class="form-label">height</label>
            <input type="tel" class="form-control" id="height" name="height" value="{{ $gym_member->height }}">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" form="editProfileForm" class="btn btn-primary">Save Changes</button>
        
      </div>
    </div>
  </div>
</div>





        <div class="buttons d-flex justify-content-center mt-5">
        <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#editProfileModal">
    Edit Profile
</button>
          {{-- <button type="button" class="btn btn-warning mb-2"><a class="nav-link p-1" href="">Edit</a></button> --}}
          {{-- <button type="button" class="btn btn-warning mb-2"><a class="nav-link p-1" href="">Save</a></button> --}}
        </div>  
      </div>
    </div>
@endsection

@section('scripts')
@endsection