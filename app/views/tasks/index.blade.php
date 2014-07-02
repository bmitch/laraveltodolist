@extends('layouts.master')

@section('content')
        <h1>All Tasks</h1>
        <ul class="list-group"></ul>
        @foreach($tasks as $task)
            <li class="list-group-item">
            	<img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}">
            	{{ link_to("tasks/$task->id", $task->title)  }}
           	</li>
        
        @endforeach
        </ul>
@stop

