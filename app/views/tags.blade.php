@extends('layouts.master')

@section('content')

<div class='row'>
@foreach( array_chunk($courses->all(), 3) as $row) 
					<div class='row'>
				@foreach( $row as $course)
				<div class='col-md-3 element'>

				<span> {{ $course->description}} </span><br/>
				</div>
				@endforeach

				</div>
@endforeach
<div class='text-center'>
</div>
			

@stop
