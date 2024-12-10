@extends('layout.App')
@section('title')
    dashboard
@endsection
@section('titlePage')
    dashboard page
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="background-color: 46554F">
                        <div class="card-header">
                            <a href="{{ route('admin.classes.index') }}">
                                <h3 class="card-title">Gym Classes</h3>
                            </a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

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
                                        <th> Name</th>
                                        <th>Coach</th>
                                        <th>Date</th>
                                        <th> Time </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $counter = 1; // Initialize counter
                                    @endphp
                                    @foreach ($classes as $class)
                                        <tr>
                                            <td class="yazan">{{ $class->Name }}</td>
                                            <td>{{ $class->trainers->first()->Name }}</td>
                                            <td>{{ $class->Time }}</td>
                                            <td>{{ $class->Date }}</td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card" style="background-color: 46554F">
                        <div class="card-header">
                            <a href="{{ route('admin.members.index') }}">
                                <h3 class="card-title">Gym Members</h3>
                            </a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
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
                                        <th>Name</th>
                                        <th>phone</th>
                                        <th>Date Enrolled</th>
                                        <th>Date Expiration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $counter = 1; // Initialize counter
                                    @endphp
                                    @foreach ($gym_members as $member)
                                        <tr>
                                            <td><img src={{ url('admin\dist\img\yazan.jpg') }}
                                                    class="img-circle elevation-2" alt="User Image"></td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->phone }}</td>
                                            <td>{{ $member->date_of_join }}</td>
                                            <td>{{ $member->expiration_date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card" style="background-color: 46554F">
                        <div class="card-header">
                            <a href="{{ route('admin.plan.index') }}">
                                <h3 class="card-title">Plans</h3>
                            </a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
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
                                        <th>Name</th>
                                        <th>time</th>
                                        <th>price</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $counter = 1; // Initialize counter
                                    @endphp
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td>{{ $plan->plan_Name }}</td>
                                            <td>{{ $plan->plan_Period }}</td>
                                            <td> $ {{ $plan->plan_Price }}</td>
                                            <td>{{ $plan->plan_Description }}</td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card" style="background-color: 46554F">
                        <div class="card-header">
                            <a href="{{ route('admin.coaches.index') }}">
                                <h3 class="card-title">Gym coachs</h3>
                            </a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
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
                                        <td>Picture</td>
                                        <th>Coach Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>availability</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coaches as $coach)
                                        <tr>
                                            <td><img src={{ url('admin\dist\img\yazan.jpg') }}
                                                    class="img-circle elevation-2" alt="User Image"></td>
                                            <td>{{ $counter }}</td>
                                            <td>{{ $coach->Name }}</td>
                                            <td>{{ $coach->Email }}</td>

                                            <td>{{ $coach->Phone }}</td>
                                            <td>{{ $coach->availability }}</td>
                                            <td><a class="edit-btn" id="3"
                                                    href="{{ route('admin.coaches.edit', $coach->id) }}">Edit</a>
                                                <form style="display:inline;"
                                                    action="{{ route('admin.coaches.destroy', $coach->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="edit-btn1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
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
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

@section('scripts')
    <!-- jQuery -->
    <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('admin/dist/js/adminlte.min.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ url('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('admin/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('dist/js/pages/dashboard3.js') }}"></script>
@endsection
@endsection
