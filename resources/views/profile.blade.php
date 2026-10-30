@extends('layouts.app')

@section('title', 'Profile | Tasks for Today')

@section('content')
    <h1>Profile</h1>

    <p>User information retrieved from the database.</p>

    <dl>
        <dt>User ID</dt>
        <dd>{{ $user->id }}</dd>

        <dt>Username</dt>
        <dd>{{ $user->username }}</dd>

        <dt>Full Name</dt>
        <dd>{{ $user->full_name }}</dd>

        <dt>Email Address</dt>
        <dd>{{ $user->email }}</dd>
    </dl>
@endsection