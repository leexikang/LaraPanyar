<?php

use Panyar\Repositories\CoursesRepositoryInterface;
use Panyar\Services\Validation\CourseValidator;

class CoursesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $course;
	protected $validator;

	public function __construct(CoursesRepositoryInterface $course, CourseValidator $validator ){

		$this->course = $course;
		$this->validator = $validator;

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
		return View::make('courses.create');
	}


	/**
	 * Store a newly created resource in storage.
	 
	 * @return Response
	 */
	public function store()
	{	

		 if(   $this->validator->validate(Input::all() ) ){

//		 	return Redirect::back()->withErrors($this->validator->errors())->withInput();
		// //'Time' => array('regex:/^([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9]|60)$/')
	 	return "Oh My God";

		 }

		  return $this->course->create(Input::all());

		  //return Redirect::route('courses.index');
 
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
		return View::make('courses.show', compact('course'));

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$course = $this->course->findById($id);
		return View::make('courses.edit', compact('course'));

	}



	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$course = $this->course->findById($id);
		$course->fill(Input::all());
		return View::make('courses.viewCourse', compact('course'));


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
