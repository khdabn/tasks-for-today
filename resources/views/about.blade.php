@extends('layouts.app')

@section('title', 'About | Tasks for Today')

@section('content')
    <h1>About This Application</h1>

    <p>
        Tasks for Today Management System was developed by ANGELO P. BUEN
        for IT0049 Technical Summative Assessment 3.
    </p>

    <p>
        The application uses Laravel, MySQL, Eloquent models,
        and Blade templates to retrieve and display task and
        profile records.
    </p>

    <p>
        The Welcome page displays today's tasks, the Task List
        displays all tasks ordered by date, and the Profile
        page displays the application's single user record.
    </p>
@endsection