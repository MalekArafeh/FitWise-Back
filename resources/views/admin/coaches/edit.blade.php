@extends('layout.App')
@section('title') Edit Coaches @endsection
@section('titlePage')Edit Coaches page @endsection
@section('css')
  <link rel="stylesheet" href="{{asset('/admin/css/form.css')}}">
@endsection
@section('content')

    
<div class="edit-form">

      <h4>Edit Coach</h4>
      <form action="{{route('admin.coaches.update', $coach->id)}}" method="post">
      @csrf
      @method('PUT')
     
        <div class="eee">
    
            <label for="">Name</label>
            <input name='Name' value="{{$coach->Name}}" type="text" class="inputpopup" >
            <label for="">phone</label>
            <input name='Phone' value="{{$coach->Phone}}" type="tel" class="inputpopup" >
            <label for="">Email</label>
            <input name='Email' type="email"  value="{{$coach->Email}}"  class="inputpopup" >
            <label for="">availability</label>
            <input  name='availability'  value="{{$coach->availability}}" type="text" class="inputpopup">

   
            <button class="edit-btn">Edit Coach</button>

   
    </div>
 

      

      </form>
      

      
    </div>
  </div>
</div>
@endsection