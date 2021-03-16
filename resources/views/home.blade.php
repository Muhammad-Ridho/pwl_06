@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-succes" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{__('You are Logged in!')}}

    <table class="table table-responsive">
        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
        <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
        <tr><th>Create At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
    </table>
</div>
@endsection
