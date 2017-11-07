@extends('layout.layout')

@section('content')
            <h1>Showing Task {{ $task->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $task->title }}<br>
            <strong>Description:</strong> {{ $task->description }}
        </p>
    </div>
@endsection