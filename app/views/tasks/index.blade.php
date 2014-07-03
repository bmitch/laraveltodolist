@extends('layouts.master')

@section('content')
        <h1>All Tasks</h1>
        <ul class="list-group"></ul>
        @foreach($tasks as $task)
            <li class="list-group-item">
            	<a href="{{ $task->user->username }}/tasks" ><img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}"></a>
            	{{ link_to_task($task) }}
           	</li>
        
        @endforeach
        </ul>
@stop

