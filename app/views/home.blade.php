@extends('layouts.main')

@section('content')
	<h3>Your Items <small>(<a href="{{ URL::route('new') }}">New task</a>)</small></h3>
	
<style>
	li{
		list-style: none;
	}
</style>	
	
	<ul>
	@foreach($items as $item)
		<li>
			{{ Form::open(array('url'=>' ', 'method'=>'post')) }}
				<input type="checkbox" {{ $item->done ? 'checked' : '' }} onClick="this.form.submit()" />
			
				<input type="hidden" name="id" value="{{ $item->id }}" />
			
				{{ $item->name }}
			{{ Form::close() }}
		</li>
	
	@endforeach
	</ul>
	
@stop
