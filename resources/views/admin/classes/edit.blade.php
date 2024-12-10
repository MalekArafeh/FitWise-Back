@extends('layout.App')
@section('title') Edit Classes @endsection
@section('titlePage')Edit Classes page @endsection
@section('css')
  <link rel="stylesheet" href="{{asset('/admin/css/form.css')}}">
@endsection
@section('content')

    
<div class="edit-form">

      <h4>Edit Classes</h4>
      <form action="{{route('admin.classes.update', $classes->id)}}" method="post">
      @csrf
      @method('PUT')
     
        <div class="">
    
            <label for="">Name</label>
            <input name='Name' value="{{$classes->Name}}" type="text" class="inputpopup" placeholder="Enter Name">
            <label for="">Time</label>
            <input name='Time' value="{{$classes->Time}}" type="text" class="inputpopup" placeholder="Enter Time">
            <label for="">Date</label>
            <input  name='Date'  value="{{$classes->Date}}" type="date" class="inputpopup" placeholder="Enter Date  ">
            <select name="coach" id="">
                @foreach ($coaches as $coach)
                    <option name="" value="{{$coach->id}}" > {{$coach->Name}}</option>
                @endforeach
                </select> 
                  
   
  
            <button class="edit-btn">Edit Member</button>

   
    </div>
 

      

      </form>
      

      
    </div>
  </div>
</div>
@endsection