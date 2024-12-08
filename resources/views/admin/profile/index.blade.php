@extends('layout.App')
@section('title')
    Admin profile
@endsection
@section('titlePage')
    Admin profile page
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- Profile Card -->
                <div class="col-md-6 col-lg-5">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ url('admin\dist\img\hulk.png') }}"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ $gym_admin['gym_name'] }}</h3>
                            <p class="text-muted text-center">Admin</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                {{-- <li class="list-group-item">
                                    <b>Username</b> <a class="float-right">{{ $gym_admin['gym_name'] }}</a>
                                </li> --}}
                                <li class="list-group-item">
                                    <b>Contact no.</b> <a class="float-right">{{ $gym_admin['gym_phone'] }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email Address:</b> <a class="float-right">{{ $gym_admin['gym_mail'] }}</a>
                                </li>
                            </ul>
                            <!-- النافذة المنبثقة -->
                            <div class="modal fade" id="editProfileModal" tabindex="-1"
                                aria-labelledby="editProfileModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- نموذج التعديل -->
                                            <form id="editProfileForm" action="{{ route('admin.profile.update') }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                {{-- <div class="mb-3">
                                                    <label for="profileImage" class="form-label">Profile Image</label>
                                                    <input type="file"name="picture" class="form-control"
                                                        id="profileImage">
                                                </div> --}}
                                                <div class="mb-3">
                                                    <label for="gym_name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="gym_name"
                                                        name="gym_name" value="{{ $gym_admin->gym_name }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gym_mail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="gym_mail"
                                                        name="gym_mail" value="{{ $gym_admin->gym_mail }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="gym_phone" class="form-label">phone</label>
                                                    <input type="tel" class="form-control" id="gym_phone"
                                                        name="gym_phone" value="{{ $gym_admin->gym_phone }}">
                                                </div>

                                                {{-- <div class="mb-3">
                                                    <label for="height" class="form-label">height</label>
                                                    <input type="tel" class="form-control" id="height" name="height"
                                                        value="{{ $gym_admin->height }}">
                                                </div> --}}
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" form="editProfileForm" class="btn btn-primary">Save
                                                Changes</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-toggle="modal" data-target="#editProfileModal"
                                class="btn btn-block btn-warning">Update</button>
                        </div>
                    </div>
                </div>

                <!-- Password Change Card -->
                <div class="col-md-6 col-lg-5">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    aria-label="Collapse password form">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="currentPassword">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword"
                                    placeholder="Current Password" required minlength="6">
                            </div>
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" class="form-control" id="newPassword" placeholder="New Password"
                                    required minlength="6">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Re-type New Password</label>
                                <input type="password" class="form-control" id="confirmPassword"
                                    placeholder="Confirm Password" required minlength="6">
                            </div>
                            <button type="button" class="btn btn-block btn-warning">Change</button>
                            <button type="reset" class="btn btn-block btn-default">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->
    </div>
@endsection

<!-- /.content-wrapper -->

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@section('scripts')
@endsection
