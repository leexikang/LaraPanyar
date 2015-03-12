@extends('layouts.user')

@section('content')

	<div class='row'>
		<div class='col-md-5 col-md-offset-1'>

			<h1> {{ Auth::user()->name }}	</h1>
			 {{ Form::model($user,
			 	array(
			 	'method' => 'PUT',
			 	'action' => array('users.update', $user->id),
				'class' => 'form-horizontal'
				)) }}

				<div class="form-group">
					{{ Form::label('email', 'Email:', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-9 col-md-offset-1">
					{{ Form::text('email', null, array('class' => 'form-control'))}}
						<span></span>
					</div>	
				</div>

				<div class="form-group">
					{{ Form::label('address', 'Address:', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-9 col-md-offset-1">
					{{ Form::text('address', null, array('class' => 'form-control'))}}
						<span></span>
					</div>	
				</div>

				<div class="form-group">
					{{ Form::label('intro', 'About You:', array('class' => ' control-label')) }}
					<div class="col-md-9 col-md-offset-3">
					{{ Form::textarea('intro', null, array('class' => 'form-control', 'row' => '8') )}}
					</div>	
				</div>
				{{ Form::submit('Edit', array( 'class' => 'col-xs-2 btn btn-default') ) }}
				</div>
				{{ Form::close() }}
		</div>
	</div>
	@stop