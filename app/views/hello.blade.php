@extends('layouts.master')

@section('content')

<div class='row'>
@foreach( array_chunk($courses->all(), 3) as $row) 
					<div class='row'>
				@foreach( $row as $course)
				<div class='col-md-3 element'>
                 {{ HTML::image('images/'. $course->photo, 'Course Image',
						array('class' => 'img-responsive') ) }}

				<span> {{ $course->name }} </span><br/>
				<span> {{ $course->startTime}} To {{ $course->endTime}} </span><br/>
				<span> {{ $course->startDate}} To {{$course->endDate}}</span><br/>
				<button class="btn btn-default"> {{ link_to_action("UsersController@show", $name = $course['user']->name, $name) }}</button>
				<button class="btn btn-default"> {{ link_to_action("CoursesController@show", "View Details", $course->id )}} </button> <br/><br/>
				</div>
				@endforeach
				
				</div>
@endforeach
<div class='text-center'>
{{ $courses->links() }}
</div>
			

@stop
