@extends('layouts.app')

@section('title', 'Welcome | Tasks for Today')

@section('content')
    <h1>Tasks for Today</h1>

    <p>Today is {{ today()->format('F j, Y') }}.</p>
    <p>Only tasks scheduled for today appear below.</p>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">Task ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Task Date</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ ucfirst($task->status) }}</td>
                        <td>{{ $task->task_date->format('F j, Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No tasks are scheduled for today.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection