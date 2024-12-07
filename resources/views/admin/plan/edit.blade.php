@extends('layout.App')
@section('title') Edit plans @endsection
@section('titlePage')Edit plans page @endsection

@section('content')

    
<div class="p">

      <h4>Edit plan</h4>
      <form action="{{route('admin.plans.update', $plan->id)}}" method="post">
      @csrf
      @method('PUT')
     
        <div class="eee">
    
            <label for="">Name</label>
            <input name='plan_Name' value="{{$plan->plan_Name}}" type="text" class="inputpopup" placeholder="Enter Name">
            <label for="">Description</label>
            <input name='plan_Description' value="{{$plan->plan_Description}}" type="text" class="inputpopup" placeholder="Enter Description">
            <label for="">Period</label>
            <input name='plan_Period' type="number"  value="{{$plan->plan_Period}}"  class="inputpopup" placeholder=" Enter Period">
            <label for="">Price</label>
            <input  name='plan_Price'  value="{{$plan->plan_Price}}" type="number" class="inputpopup" placeholder="Enter Price ">
          
   
  
            <button  class="edit-btn">Edit plan</button>

   
    </div>
 

      

      </form>
      

      
    </div>
  </div>
</div>
@endsection