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
                    <div class="card bg-gradient-success">
                        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendar
                            </h3>
                            <!-- tools card -->
                            <div class="card-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                        data-toggle="dropdown" data-offset="-52" control-id="ControlID-3">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a href="#" class="dropdown-item">Add new event</a>
                                        <a href="#" class="dropdown-item">Clear events</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">View calendar</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse"
                                    control-id="ControlID-4">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove"
                                    control-id="ControlID-5">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pt-0">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%">
                                <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                    <ul class="list-unstyled">
                                        <li class="show">
                                            <div class="datepicker">
                                                <div class="datepicker-days" style="">
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Month"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Month">October 2024</th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Month"></span></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="dow">Su</th>
                                                                <th class="dow">Mo</th>
                                                                <th class="dow">Tu</th>
                                                                <th class="dow">We</th>
                                                                <th class="dow">Th</th>
                                                                <th class="dow">Fr</th>
                                                                <th class="dow">Sa</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="09/29/2024"
                                                                    class="day old weekend">29</td>
                                                                <td data-action="selectDay" data-day="09/30/2024"
                                                                    class="day old">30</td>
                                                                <td data-action="selectDay" data-day="10/01/2024"
                                                                    class="day">1</td>
                                                                <td data-action="selectDay" data-day="10/02/2024"
                                                                    class="day">2</td>
                                                                <td data-action="selectDay" data-day="10/03/2024"
                                                                    class="day">3</td>
                                                                <td data-action="selectDay" data-day="10/04/2024"
                                                                    class="day">4</td>
                                                                <td data-action="selectDay" data-day="10/05/2024"
                                                                    class="day weekend">5</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="10/06/2024"
                                                                    class="day weekend">6</td>
                                                                <td data-action="selectDay" data-day="10/07/2024"
                                                                    class="day">7</td>
                                                                <td data-action="selectDay" data-day="10/08/2024"
                                                                    class="day">8</td>
                                                                <td data-action="selectDay" data-day="10/09/2024"
                                                                    class="day">9</td>
                                                                <td data-action="selectDay" data-day="10/10/2024"
                                                                    class="day">10</td>
                                                                <td data-action="selectDay" data-day="10/11/2024"
                                                                    class="day">11</td>
                                                                <td data-action="selectDay" data-day="10/12/2024"
                                                                    class="day weekend">12</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="10/13/2024"
                                                                    class="day weekend">13</td>
                                                                <td data-action="selectDay" data-day="10/14/2024"
                                                                    class="day">14</td>
                                                                <td data-action="selectDay" data-day="10/15/2024"
                                                                    class="day">15</td>
                                                                <td data-action="selectDay" data-day="10/16/2024"
                                                                    class="day">16</td>
                                                                <td data-action="selectDay" data-day="10/17/2024"
                                                                    class="day">17</td>
                                                                <td data-action="selectDay" data-day="10/18/2024"
                                                                    class="day">18</td>
                                                                <td data-action="selectDay" data-day="10/19/2024"
                                                                    class="day weekend">19</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="10/20/2024"
                                                                    class="day weekend">20</td>
                                                                <td data-action="selectDay" data-day="10/21/2024"
                                                                    class="day">21</td>
                                                                <td data-action="selectDay" data-day="10/22/2024"
                                                                    class="day">22</td>
                                                                <td data-action="selectDay" data-day="10/23/2024"
                                                                    class="day">23</td>
                                                                <td data-action="selectDay" data-day="10/24/2024"
                                                                    class="day">24</td>
                                                                <td data-action="selectDay" data-day="10/25/2024"
                                                                    class="day">25</td>
                                                                <td data-action="selectDay" data-day="10/26/2024"
                                                                    class="day weekend">26</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="10/27/2024"
                                                                    class="day weekend">27</td>
                                                                <td data-action="selectDay" data-day="10/28/2024"
                                                                    class="day">28</td>
                                                                <td data-action="selectDay" data-day="10/29/2024"
                                                                    class="day">29</td>
                                                                <td data-action="selectDay" data-day="10/30/2024"
                                                                    class="day">30</td>
                                                                <td data-action="selectDay" data-day="10/31/2024"
                                                                    class="day active today">31</td>
                                                                <td data-action="selectDay" data-day="11/01/2024"
                                                                    class="day new">1</td>
                                                                <td data-action="selectDay" data-day="11/02/2024"
                                                                    class="day new weekend">2</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="11/03/2024"
                                                                    class="day new weekend">3</td>
                                                                <td data-action="selectDay" data-day="11/04/2024"
                                                                    class="day new">4</td>
                                                                <td data-action="selectDay" data-day="11/05/2024"
                                                                    class="day new">5</td>
                                                                <td data-action="selectDay" data-day="11/06/2024"
                                                                    class="day new">6</td>
                                                                <td data-action="selectDay" data-day="11/07/2024"
                                                                    class="day new">7</td>
                                                                <td data-action="selectDay" data-day="11/08/2024"
                                                                    class="day new">8</td>
                                                                <td data-action="selectDay" data-day="11/09/2024"
                                                                    class="day new weekend">9</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-months" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Year"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Year">2024</th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Year"></span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectMonth"
                                                                        class="month">Jan</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Feb</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Mar</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Apr</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">May</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Jun</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Jul</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Aug</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Sep</span><span
                                                                        data-action="selectMonth"
                                                                        class="month active">Oct</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Nov</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Dec</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-years" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Decade"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Decade">2020-2029</th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Decade"></span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectYear"
                                                                        class="year old">2019</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2020</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2021</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2022</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2023</span><span
                                                                        data-action="selectYear"
                                                                        class="year active">2024</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2025</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2026</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2027</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2028</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2029</span><span
                                                                        data-action="selectYear"
                                                                        class="year old">2030</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-decades" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Century"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5">2000-2090</th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Century"></span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectDecade"
                                                                        class="decade old"
                                                                        data-selection="2006">1990</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2006">2000</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2016">2010</span><span
                                                                        data-action="selectDecade" class="decade active"
                                                                        data-selection="2026">2020</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2036">2030</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2046">2040</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2056">2050</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2066">2060</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2076">2070</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2086">2080</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2096">2090</span><span
                                                                        data-action="selectDecade" class="decade old"
                                                                        data-selection="2106">2100</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="picker-switch accordion-toggle"></li>
                                    </ul>
                                </div>
                            </div>
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
                            <h3 class="card-title">Gym Members</h3>
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
                                        <th>ID plan</th>
                                        <th>Name</th>
                                        <th>time</th>
                                        <th>price</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $counter = 1; // Initialize counter
                                    @endphp
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td>{{ $counter }}</td>
                                            <td>{{ $plan->plan_Name }}</td>
                                            <td>{{ $plan->plan_Period }}</td>
                                            <td> $ {{ $plan->plan_Price }}</td>
                                            <td>{{ $plan->plan_Description }}</td>
                                            <td><a class="edit-btn"
                                                    href="{{ route('admin.plan.edit', $plan->id) }}">Edit</a>
                                                <form style="display:inline;"
                                                    action="{{ route('admin.plan.destroy', $plan->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="edit-btn1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-trash"
                                                            viewBox="0 0 16 16">
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
                    <!-- /.card -->
                </div>
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Coaches</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Coaches</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-success" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">90%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
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
