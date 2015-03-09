@extends('layouts.user')

@section('content')

<div class='row'>
	@foreach( array_chunk($courses->all(), 3)  as $row) 
	<div class='row'>
		@foreach($row as $course)
		<div class='col-md-3 element'> 
			<img src="{{ asset('images/' .$course->photo) }}" class="img-responsive"><br/><br/>
			<span> {{ $course->name }} </span><br/>
			<span> {{ $course->startTime }} to {{$course->endTime}} </span><br/>
			<span> {{ $course->startDate }} to {{ $course->endDate }}</span><br/>
			<span> {{ link_to_route("courses.show", 'View Details', $course->id )}} </span> <br/>
		</div>
		@endforeach 

	</div>
	@endforeach
	<br/>
	<div class='text-center'>
	{{ $courses->links() }}
	</div>

	@stop