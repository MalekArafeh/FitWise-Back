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
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $totalMembers }}</h3>
                            <p>All Members</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.members.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $expiringSubscriptionsCount }}</h3>
                            <p>Expiring Subscriptions</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('admin.dashboard.sub') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $totalCoaches }}</h3>
                            <p>Coaches Number</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('admin.coaches.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $current_members }}<sup style="font-size: 20px"></sup></h3>
                            <p>Gym Status</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('admin.dashboard.status') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
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
                            <a href="{{ route('admin.dashboard.sub') }}">
                                <h3 class="card-title">Expiring Subscriptions</h3>
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
                                        <td><b>picture</b></td>
                                        <th>Name</th>
                                        <th>phone</th>
                                        <th>Date Enrolled</th>
                                        <th>Date Expiration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($gym_members->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">No subscriptions nearing expiration.
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($gym_members as $member)
                                            <tr>
                                                <td><img src={{ $member->picture ? asset('storage/' . $member->picture) : asset('img/profile.jpg') }}
                                                        class="img-circle elevation-2" alt="User Image"></td>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->phone }}</td>
                                                <td>{{ $member->date_of_join }}</td>
                                                <td>{{ $member->expiration_date }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
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
                                        <td>
                                            <b>Picture</b>
                                        </td>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>availability</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coaches as $coach)
                                        <tr>
                                            <td><img src={{ url('admin\dist\img\yazan.jpg') }}
                                                    class="img-circle elevation-2" alt="User Image"></td>
                                            <td>{{ $coach->Name }}</td>
                                            <td>{{ $coach->Email }}</td>

                                            <td>{{ $coach->Phone }}</td>
                                            <td>{{ $coach->availability }}</td>

                                        </tr>
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
