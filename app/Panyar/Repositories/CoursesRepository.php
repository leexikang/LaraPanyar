<?php namespace Panyar\Repositories;

use Course;

Class CoursesRepository implements CoursesRepositoryInterface{

	public function getAll(){

		return Course::all();
	}

	public function findById($id){

		return Course::findOrFail($id);
	}

	public function make( array $with = array()){

		return Course::with($with);
	}

	public function  create($input){


		  $course = new Course();
		  $course->user_id = $input['user_id'];
		  $course->description = $input['description'];
		  $course->note = $input['note'];
		  $course->name = $input['name'];
		  $course->startTime = $input['startTime'];
		  $course->endTime = $input['endTime'];
		  $course->startDate = $input['startDate'];
		  $course->endDate = $input['endDate'];
		  $course->fee = $input['fee'];

        if( isset($input['image']) ){

           $file = $input['image'];
           $name = time() . '-' . $file->getClientOriginalName();
		   $file->move(public_path().'/images/', $name);
		   $course->photo = $name;
        }

        $course->save();
        return $course;
	}


	public  function getByPage($page = 1, $limit = 10, $with = array() ){

		$result = new \StdClass;
		$result->page = $page;
		$result->limit = $limit;
		$result->totalItems = 0;
		$result->items = array();
		$query = $this->make($with);
		$model = $query->skip($limit * ($page - 1))->take($limit)->get();
		$result->totalItems = Course::count();
		$result->items = $model->all();
		return $result;
	}

}