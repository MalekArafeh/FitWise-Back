
@extends('layout.App')
@section('title') Classes @endsection
@section('titlePage') Classes page @endsection

@section('content')

    
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-12">
                <div class="button-importplus">
                  <button class="edit-btn">Import</button>
                  <button class="edit-btn"  id="popupmembers">+</button>
                </div>
               
                <div class="card" style="background-color: 46554F">
                  <div class="card-header">
                    <h3 class="card-title">Gym Classes</h3>
    
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th> Id</th>
                          <th> Name</th>
                          <th>Coach</th>
                          <th>Date</th>
                          <th> Time </th>
                          <th>Actions</th>
                      
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $counter = 1; // Initialize counter
                    @endphp
                        @foreach ($classes as $class)
                        
                        <tr>
                            <td>{{ $counter }}</td> 
                            <td>{{$class->Name}}</td>

                            <td>{{$class->Time}}</td>
                            <td>{{$class->Date}}</td>
                          
                           <td><a  class="edit-btn" id="3" href="{{route('admin.classes.edit',$class->id)}}">Edit</a> 
                            <form style="display:inline;" action="{{route('admin.classes.destroy',$class->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                  </svg></button>

                            </form>
                           </td>                        
                          </tr>
                          @php
                          $counter++; // Increment counter
                      @endphp
                        @endforeach
                      

                           
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- Add members-->
              <div class="popupmm">
                <div class="popup-cuntentmm">
                  <h4>Add classes</h4>
                  <form action="{{route('admin.add_classes.store')}}" method="POST">
                    @csrf
                    <div class="popupform">
                    <div>
                        <label for="">Name</label>
                        <input name="Name" type="text" class="inputpopup" placeholder=" Enter member name">
                      <label for="">coach</label>
                      <br>
                      <select name="coach" id="">
                        @foreach ($coaches as $coach)
                            <option name="" value="{{$coach->id}}" > {{$coach->Name}}</option>
                        @endforeach
                        </select>
                          
                                    
                                        
                    </div>
                    <div>
                      <label for="">Start </label>
                        <input name="start" type="datetime-local" class="inputpopup" placeholder=" Enter date">
                        <label for="">End </label>
                        <input name="end" type="datetime-local" class="inputpopup" placeholder=" Enter time">
                 
                        <div style=" margin-top: 20px; text-align: right;">
                          <button class="edit-btn">Add class</button>
                          <button class="butformcancel" id="close">cancel</button>
                        </div>
                    </div>
                </div>


             
              {{-- <div class="popupmmEdit">
                <div class="popup-cuntentmm">
                  <h4>Edit Member</h4>
                  <form action="{{route('admin.members.update',1)}}" method="post">
                    @csrf
                 
                    <div class="popupform">
                    <div>
                        <label for="">Name</label>
                        <input name='name' type="text" class="inputpopup" placeholder="Enter Name">
                        <label for="">Email</label>
                        <input name='email' type="text"   class="inputpopup" placeholder=" Enter Email">

                    </div>
                    <div>
                        <label name='date_of_join'  for="">Date Enrolled</label>
                        <input type="date" class="inputpopup" placeholder="Enter Date Enrolled ">
                        <label for="">Date Expiration</label>
                        <input name='expiration_date'  type="date" class="inputpopup" placeholder="Enter Date Expiration ">

                    </div>
                </div>
                <div class="popupform">
                 
                    <div>
                        <br>
                        <button class="edit-btn">Edit Member</button>
                        <button class="butformcancel" id="close">cancel</button>
                    </div>
                </div>
             

                  

                  </form>
                  

                  
                </div>
              </div> --}}
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            
          
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@endsection
@section('scripts')

    <script src={{url('admin\members.js')}}></script>
@endsection

