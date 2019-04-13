@extends('layouts/master')

@section('content')

	<h1>{{$project->title}}</h1>
	<p>{{$project->description}}</p>

	<br>
	<button><a href="/projects/{{$project->id}}/edit">EDIT</a></button>
@endsection