@include("layouts.partials.header")
@include("layouts.partials.nav")
<div class='container'>
<br/><br/><br/>
	<div class='row'>
		<div class="col-md-5 col-md-offset-3">

			{{ Form::open(array('action' => 'RegistrationController@create',
				'method' => 'POST'
				)) }}

				<div class='form-group'>

					{{ Form::label('name', 'Username:')}}
					{{ Form::text('name', null, array('class' => 'form-control') ) }}

                    @if( isset($errors->name) )
                    <div class="alert alert-danger" role="alert">{{ $errors->first('name') }} </div>
                    @endif
                </div>

            <div class='form-group'>

                {{ form::label('password', 'password')}}
                {{ form::password('password', array('class' => 'form-control') ) }}

                @if( isset($errors->passwor) )
                <div class="alert alert-danger" role="alert">{{ $errors->first('passowrd') }} </div>
                @endif

            </div>

            <div class='form-group'>

                {{ form::label('re-password', 'Retype Password')}}
                {{ form::password('re-password', array('class' => 'form-control') ) }}
            </div>

            <div class='form-group'>

                {{ form::label('email', 'email')}}
                {{ form::text('email', null, array('class' => 'form-control') ) }}

                @if( isset($errors->email) )
                <div class="alert alert-danger" role="alert">{{ $errors->first('email') }} </div>
                @endif

            </div>

            <div class="form-group">

                {{ Form::submit('Sign Up', array('class' => 'btn btn-block btn-lg btn-panyar') )}}

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





