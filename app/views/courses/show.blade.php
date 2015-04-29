@extends('layouts.user')
	
@section('content')
	<div class='container'>
	<div class='row'>


		<div class='col-md-7'>
		<h1> {{ $course->name }} </h1>
		{{ HTML::image('images/'. $course->photo, 'Course Image',
						array('class' => 'img-responsive img-thumbnail') ) }}
		<h3> About the Course </h3>
		<p class="text-justify"> {{ $course->description }} </p>
		<br/>
		<h2> Informariton </h2>
		<dl class="dl-horizontal information">

  			<dt>Time: </dt>
  			<dd>{{ $course->startTime }} To {{ $course->endTime }} </dd><br/>
  			<dt> Date: </dt>
  			<dd>{{ $course->startDate}} To {{ $course->endDate}} </dd><br/>
  			<dt> Fee: </dt>
  			<dd>${{ $course->fee }} </dd><br/>
  			<dt> Center: </dt>
  			<dd> {{ $course['user']->name }} </dd><br/>
  			<dt> Address: </dt>
  			<dd> {{ $course['user']->address }} </dd><br/>
  			<dt> Email: </dt>
  			<dd> {{ $course['user']->email }} </dd><br/>
            <dt> Week: </dt>
            <dd> {{ $course->week }} </dd><br/>
  			<dt> Note: </dt>
  			<dd> {{ $course->note }} </dd>
		</dl>
		<h2> Center Detail</h2>
		<p class='text-justify'> {{ $course['user']->intro }} </p>

            @if(Auth::check() && $course['user']->name == Auth::user()->name)
            {{ link_to_action("CoursesController@edit", "Edit Course", $course->id , ['class' => 'btn btn-panyar'] )}}
            @endif

		</div>
	</div>
	</div>

@stop