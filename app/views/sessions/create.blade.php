@include("layouts.partials.header")
@include("layouts.partials.nav")
<div class='container'>
<br/><br/><br/>
	<div class='row'>
		<div class="col-md-5 col-md-offset-3">

			{{ Form::open(array('route' => 'session.store',
				'method' => 'POST'
				)) }}

				<div class='form-group'>

					{{ Form::label('name', 'Username:')}}
					{{ Form::text('name', null, array('class' => 'form-control') ) }}

				</div>

				<div class='form-group'>

					{{ Form::label('password', 'Password')}}
					{{ Form::password('password', array('class' => 'form-control') ) }}
				</div>
				<div class="form-group">

					{{ Form::submit('Login', array('class' => 'btn btn-block btn-lg btn-panyar') )}}

				</div>

				<br/><br/>


				{{ Form::close() }}
				@if ( $error = Session::get('flash_message') )

				<div class="alert alert-danger" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					{{ $error }}
				</div>

				@endif
			</div>
		</div>
	</div>





	