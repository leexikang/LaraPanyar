<?php namespace Panyar\Repositories;

use Course;

Class CoursesRepository{

	public function getAll(){

		return Course::all();
	}

	public function findById($id){

		return Course::find($id);
	}
	public function make( array $with = array()){

		return Course::with($with);
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