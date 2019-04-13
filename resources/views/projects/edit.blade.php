@extends('layouts/master')

@section('content')

	<h1>This is Edit page</h1>

	<form method="POST" action="/projects/{{$project->id}}">
		{{csrf_field()}}
		{{method_field('PATCH')}}

		Title <input type="text" name="title" value="{{$project->title}}"> <br>
		Description <textarea name="description">{{$project->description}}</textarea><br>
		<button type="submit"> SAVE </button> <br>

	</form>

	<form method="POST" action="/projects/{{$project->id}}">
			{{csrf_field()}}
			{{method_field('DELETE')}}
			<button type="submit"> DELETE</button>
			
	</form>

@endsection