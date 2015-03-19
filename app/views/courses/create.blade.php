@extends('layouts.user')

@section('content')


	<div class='row'>
		<div class='col-md-6 col-md-push-1'>
			 {{ Form::open(array(
			 	'Method' => 'post',
			 	'files' => 'true',
			 	'action' => 'CoursesController@store',
				'class' => 'form-horizontal'
				)) }}

		@include("layouts.partials.courseForm")

				{{ Form::close() }}

			</div>
			</div>
		</div>

		@stop


