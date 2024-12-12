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
                <div class="col-lg-12">
                    <div class="card" style="background-color: 46554F">
                        <div class="card-header">
                            <a href="{{ route('admin.members.index') }}">
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
                                        <td>picture</td>
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
