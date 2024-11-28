
@extends('layout.App')
@section('title') Members @endsection
@section('titlePage') Members page @endsection

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
                    <h3 class="card-title">Gym Members</h3>
    
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
                          <td>picture</td>
                          <th>Member Id</th>
                          <th>Name</th>
                          <th>Date Enrolled</th>
                          <th>Date Expiration</th>
                          <th>Actions</th>
                      
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><img src={{url('admin\dist\img\yazan.jpg')}} class="img-circle elevation-2" alt="User Image"></td>
                          <td>183</td>
                          <td>John Doe</td>
                          <td>1-7-2024</td>
                          <td>1-12-2024</td>
                         <td><button class="edit-btn" id="3" onclick="edit(3) ">Edit</button> <button class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg></button></td> 
                         

                          
                        </tr>
                        <tr>
                          <td><img src={{url('admin\dist\img\yazan.jpg')}} class="img-circle elevation-2" alt="User Image"></td>
                          <td>219</td>
                          <td>Alexander Pierce</td>
                          <td>11-7-2014</td>
                          <td>1-12-2024</td>
                          <td><button class="edit-btn " id="4" onclick="edit(4) ">Edit</button> <button class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg></button></td> 
                        </tr>
                        <tr>
                          <td><img src={{url('admin\dist\img\yazan.jpg')}} class="img-circle elevation-2" alt="User Image"></td>
                          <td>657</td>
                          <td>Bob Doe</td>
                          <td>11-7-2014</td>
                          <td>1-12-2024</td>
                         
                          <td><button class="edit-btn "id="1" onclick="edit(1) " >Edit</button> <button class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg></button></td> 
                        </tr>
                        <tr>
                          <td><img src={{url('admin\dist\img\yazan.jpg')}} class="img-circle elevation-2" alt="User Image"></td>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td>1-12-2024</td>
                          <td><button class="edit-btn"id="2" onclick="edit(2) ">Edit</button> <button class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg></button></td> 
                        </tr>
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
                  <h4>Add Member</h4>
                  <form action="">
                    <div class="popupform">
                    <div>
                        <label for="">Name</label>
                        <input type="text" class="inputpopup" placeholder="Enter name">
                        <label for="">Email</label>
                        <input type="text" class="inputpopup" placeholder="Enter Email">

                    </div>
                    <div>
                        <label for="">Date Enrolled</label>
                        <input type="text" class="inputpopup" placeholder="Enter Date Enrolled ">
                        <label for="">Date Expiration</label>
                        <input type="text" class="inputpopup" placeholder="Enter Date Expiration">

                    </div>
                </div>
                <div class="popupform">
                 
                    <div>
                        <br>
                        <button class="edit-btn">Add Member</button>
                        <button class="butformcancel" id="close">cancel</button>
                    </div>
                </div>
             

                  

                  </form>
                  

                  
                </div>
              </div>


              <div class="popupmmEdit">
                <div class="popup-cuntentmm">
                  <h4>Edit Member</h4>
                  <form action="">
                    <div class="popupform">
                    <div>
                        <label for="">Name</label>
                        <input type="text" class="inputpopup" placeholder="Enter Name">
                        <label for="">Email</label>
                        <input type="text" class="inputpopup" placeholder=" Enter Email">

                    </div>
                    <div>
                        <label for="">Date Enrolled</label>
                        <input type="text" class="inputpopup" placeholder="Enter Date Enrolled ">
                        <label for="">Date Expiration</label>
                        <input type="text" class="inputpopup" placeholder="Enter Date Expiration ">

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
              </div>
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

