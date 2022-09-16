@extends('layouts.app')

@section('content')
<div class="container">
    {{-- if(@auth) --}}
    <br>
    <h2 class="text-center">Task List:</h2>
        @if(count($tasks) > 0)
            @foreach($tasks as $task)
        <div class="task-container border border-secondary text-center">
            <h3>{{$task-> taskTitle}}</h3>
            <small>Created on {{$task -> created_at}}</small><br>
            <small>Updated at {{$task -> updated_at}}</small><br>
            <a href="{{ route('tasks.show', $task->id)}}" class="btn btn-secondary">View</a>
        </div>
            @endforeach
        @else
        <p>No tasks to show.</p>
        @endif  
    <br>
    <a href="/tasks/create" class= "btn btn-primary">Create New Task</a>
</div>      
@endsection