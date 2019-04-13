@extends('layouts/master')

@section('title' , 'Create Project')

@section('content')

	<h1>Create new Project</h1>

	<form method="POST" action="/projects">

		{{ csrf_field() }}
		
		<div>
			<input type="text" name="title" placeholder="Title">
		</div>

		<div>
			<textarea name="description" placeholder="Description"></textarea>
		</div>

		<div>
			<button type="submit"> Submit </button>
		</div>
	
	</form>
@endsection