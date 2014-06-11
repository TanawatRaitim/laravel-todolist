@extends('layouts.main')

@section('content')

	<h3>Create New Task</h3>
	
	@foreach($errors->all() as $error)
	
		<p class="error">{{ $error }}</p>
	
	@endforeach
	
	{{ Form::open() }}
	
		<input type="text" name="name" placeholder="The name of your task" id="" autofocus="" />
		<input type="submit" value="Create" />
	
	{{ Form::close() }}

@stop
