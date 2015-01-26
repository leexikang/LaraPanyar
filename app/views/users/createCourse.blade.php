@extends('layouts.user')

@section('content')


	<div class='row'>
		<div class='col-md-6 col-md-push-1'>
			 {{ Form::open(array(
			 	'action' => 'CoursesController@store',
				'class' => 'form-horizontal'
				)) }}

		{{Form::hidden('user_id', '11')}}
				<div class="form-group">
					{{ Form::label('name', 'Name:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
					{{ Form::text('name', null, array('class' => 'form-control'))}}
						<span></span>
					</div>	
				</div>

				<div class="form-group">
					{{ Form::label('description', 'Description:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
					{{ Form::textarea('description', null, array('class' => 'form-control', 'rows' => '8') )}}
					</div>	
				</div>

				<div class="form-group">
					{{ Form::label('note', 'Note:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
						{{ Form::textarea('note', null, array('class' => 'form-control', 'rows' => '3') )}}
					</div>	
				</div>

				<div class="form-group">
					{{ Form::label('fee', 'Fee:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
						{{ Form::text('fee', null, array('class' => 'form-control', 'placeholder' => '$' ))}}
						<span></span>
					</div>	
				</div>

			<div class="form-group ">

					{{ Form::label('startTime', 'Start Time:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
					<div class="input-append bootstrap-timepicker">
						{{ Form::text('startTime', null, array('class' => 'form-control timepicker'))}}
					</div>
					</div>	
				</div>

				<div class="form-group">
					{{ Form::label('endTime', 'End Time:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
					<div class="input-append bootstrap-timepicker">
						{{ Form::text('endTime', null, array('class' => 'form-control timepicker input-small'))}}
						</div>
						<span></span>
					</div>	
					</div>
 
	
			<div class="form-group">
					{{ Form::label('startDate', 'Start Date:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
						{{ Form::text('startDate', null, array('class' => 'form-control datepicker'))}}
						<span></span>
					</div>	
				</div>

				<div class="form-group">
					{{ Form::label('endDate', 'End Date:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
						{{ Form::text('endDate', null, array('class' => 'form-control datepicker'))}}
						<span></span>
					</div>	
				</div>
    				<div class='col-md-offset-2'>
			{{ Form::submit('Edit', array( 'class' => 'col-xs-2 btn btn-primary') ) }}
			</div>
				{{ Form::close() }}

			</div>
			</div>
		</div>

		@stop


