@extends('layout.App')

@section('title')
    Edit Gym Status
@endsection

@section('titlePage')
    Edit Gym Status Page
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/admin/css/form.css') }}">
@endsection

@section('content')
    <div class="edit-form">
        <form action="{{ route('admin.dashboard.status.update') }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="current_members">Change the number of members at the gym right now:</label>
                <input name="current_members" value="{{ old('current_members') }}" type="text" id="current_members"
                    class="inputpopup">

                @if ($errors->has('current_members'))
                    <span class="error">{{ $errors->first('current_members') }}</span>
                @endif

                <button type="submit" class="edit-btn">Update</button>
            </div>
        </form>
    </div>
@endsection
