<?php

use Panyar\Repositories\CoursesRepository;

class CoursesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $course;

	public function __construct(CoursesRepository $course ){

		$this->course = $course;

	}

	public function index()
	{	
		$page = Input::get('page');
		$data = $this->course->getByPage($page, 6, array('user') );
		$courses = Paginator::make($data->items, $data->totalItems, 6);
		return View::make('hello', compact('courses') );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.createCourse');
	}


	/**
	 * Store a newly created resource in storage.
	 
	 * @return Response
	 */
	public function store()
	{	
		$course = Course::create(Input::all());
		return $course;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$course = Course::with('user')->where('id', $id)->first();
		return View::make('courses.viewCourse', compact('course'));

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function data(){

		return $this->course->getAll();

	}

	public function userCourses(){

		$courses = Course::where('user_id', Auth::id())->paginate(6);
	 	return View::make('users.main', compact('courses'));
	}
}
