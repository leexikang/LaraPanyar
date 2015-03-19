<?php

class SessionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$attempt = Auth::attempt([

			'name' => $input['name'],
			'password' => $input['password']

			]);

		if( $attempt) return Redirect::route("users.courses", array("user" => Auth::user()->name ) );
		return Redirect::back()->with('flash_message', 'Username or password are not correct!');
	}

	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/login');
	}


}
