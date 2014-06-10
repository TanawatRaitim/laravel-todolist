@extends('layouts.main')

@section('content')

	{{ Form::open(array('autocomplete'=>'off')) }}
		<input type="text" name="username" placeholder="username" id="" />
		<input type="password" name="" id="" placeholder="password" />
		<input type="submit" value="Sign in" />
	{{ Form::close() }}
	
@stop
