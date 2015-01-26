@extends('layouts.master')

@section('content')

<div class='row'>
@foreach( array_chunk($courses->all(), 3) as $row) 
					<div class='row'>
				@foreach( $row as $course)
				<div class='col-md-3 element'> 
				<img src="{{ $course->photo }}" class="img-responsive"><br/><br/>
				<span> {{ $course->name }} </span><br/>
				<span> {{ $course->startTime}} To {{ $course->endTime}} </span><br/>
				<span> {{ $course->startDate}} To {{$course->endDate}}</span><br/>
				<span> {{ $course['user']->name }}</span><br/>
				<span> Veiw Details </span> <br/>
				</div>
				@endforeach
				
				</div>
@endforeach
<div class='text-center'>
{{ $courses->links() }}
</div>
			

@stop
