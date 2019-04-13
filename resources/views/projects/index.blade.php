@extends('layouts/master')

@section('title' , 'Projects')

@section('content')
	
	@foreach($projects as $project)
		<ul>
			
			<li><a href="projects/{{$project->id}}">{{$project->title}}</a></li>

		</ul>
	@endforeach
	<br><br>
	<a href="/projects/create">Create a new Post</a>
@endsection