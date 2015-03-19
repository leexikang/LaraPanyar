@extends('layouts.master')

@section('content')

	<div class='container'>
	<div class='row'>


		<div class='col-md-7'>
		<h1> {{ $user->name }} </h1>
		<h3> About the Course </h3>
		<p class="text-justify"> {{ $user->intro }} </p>
	<address>
	<strong> {{ $user->name }}</strong><br/>
	{{ $user->address}}	<br/>
	{{$user->email }}
	</address>

	{{ link_to("/", "Back", ["class" => "btn btn-panyar"])}}

@stop
