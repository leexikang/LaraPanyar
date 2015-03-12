@extends('layouts.user')

@section('content')


	<div class='row'>
		<div class='col-md-6 col-md-push-1'>
			 {{ Form::model($course,
			 	array(
			 	'method' => 'PUT',
			 	'files' => 'true',
			 	'action' => ['CoursesController@update', $course->id],
				'class' => 'form-horizontal'
				)) }}

		@include("layouts.partials.courseForm")

				{{ Form::close() }}

			</div>
			</div>
		</div>

		@stop


