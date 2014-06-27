@extends('layouts.main')

@section('title')My to do list.@stop

@section('content')

	@foreach($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach

	{{ Form::open(array('autocomplete'=>'off')) }}
		<input type="text" name="username" placeholder="username" id="" />
		<input type="password" name="password" id="" placeholder="password" />
		<input type="submit" value="Sign in" />
	{{ Form::close() }}
	
@stop
