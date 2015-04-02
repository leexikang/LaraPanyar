	{{Form::hidden('user_id', Auth::id())}}

				<div class="form-group">
					{{ Form::label('name', 'Name:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
					{{ Form::text('name', null, array('class' => 'form-control'))}}
					@if($errors->has("name"))
					<div class="alert alert-danger" role="alert">
						<span class="alert alert-danger" role="alert">{{ $errors->first('name') }} </span>
					</div>
					@endif
					</div>	
				</div>

				<div class="form-group">

					{{ Form::label('image', 'Choose image for your course', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
					{{ Form::file('image', null, array('class' => 'form-control'))}}
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

 			<div class="form-group ">

					{{ Form::label('category_id', 'Category', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
                        {{ Form::select('category_id', Category::lists('name', 'id'), null, array('class' => 'form-control') ) }}
					</div>
				</div>



    <div class="form-group">
        {{ Form::hidden('week', null, array("id" => "week") ) }}
        {{ Form::label('week1', 'Week', array('class' => 'col-md-4 control-label')) }}
        <div class="col-md-7 col-md-offset-1">
            <span class="btn btn-default btn-week"> Sun </span>
            <span class="btn btn-default btn-week"> Mon </span>
            <span class="btn btn-default btn-week"> Tue </span>
            <span class="btn btn-default btn-week"> Wed </span>
            <span class="btn btn-default btn-week"> Thu </span>
            <span class="btn btn-default btn-week"> Fri </span>
            <span class="btn btn-default btn-week"> Sat </span>
            <br/><br/>
        </div>
        <div class="form-group">
            {{ Form::label('startDate', 'Start Date:', array('class' => 'col-md-4 control-label')) }}
            <div class="col-md-7 col-md-offset-1">
                {{ Form::text('startDate', null, array('class' => 'form-control datepicker'))}}
                <span>{{ $errors->first('startDate') }}</span>
            </div>
        </div>

        <div class="form-group">
					{{ Form::label('endDate', 'End Date:', array('class' => 'col-md-4 control-label')) }}
					<div class="col-md-7 col-md-offset-1">
						{{ Form::text('endDate', null, array('class' => 'form-control datepicker'))}}
						<span>{{ $errors->first('endDate') }}</span>
					</div>	
				</div>
    				<div class='col-md-offset-2'>
			{{ Form::submit('Edit', array( 'class' => 'col-xs-2 btn btn-panyar') ) }}
			</div>