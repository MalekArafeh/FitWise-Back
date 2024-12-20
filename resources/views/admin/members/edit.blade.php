@extends('layout.App')

@section('title') Edit Members @endsection

@section('titlePage')Edit Members page @endsection
@section('css')
  <link rel="stylesheet" href="{{asset('/admin/css/form.css')}}">
@endsection

@section('content')   
  <div class="edit-form">
    <h4>Edit Member</h4>
    <form action="{{route('admin.members.update', $member->id)}}" method="post">
    @csrf
    @method('PUT')
      <div>
          <label for="">Name</label>
          <input name='name' value="{{$member->name}}" type="text" class="inputpopup" placeholder="Enter Name">
          <label for="">phone</label>
          <input name='phone' value="{{$member->phone}}" type="tel" class="inputpopup" placeholder="Enter Name">
          <label for="">Email</label>
          <input name='email' type="text"  value="{{$member->email}}"  class="inputpopup" placeholder=" Enter Email">
          <label for="">Date Enrolled</label>
          <input  name='date_of_join'  value="{{$member->date_of_join}}" type="date" class="inputpopup" placeholder="Enter Date Enrolled ">
          <label for="">Date Expiration</label>
          <input name='expiration_date'   value="{{$member->expiration_date}}"type="date" class="inputpopup" placeholder="Enter Date Expiration ">
          <button class="edit-btn">Edit Member</button>
      </div>
    </form>     
  </div>
@endsection