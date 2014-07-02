@extends('layouts.master')

@section('content')
	<h1>Task Title</h1>
	<article>{{ $task->body }}</article>

	<p>{{ link_to('/', 'Go Back')}}
@stop