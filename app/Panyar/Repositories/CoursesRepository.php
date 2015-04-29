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

    protected function editOperation(Course $course, $input){
        $course->user_id = $input['user_id'];
        $course->description = $input['description'];
        $course->note = $input['note'];
        $course->name = $input['name'];
        $course->startTime = $input['startTime'];
        $course->endTime = $input['endTime'];
        $course->startDate = $input['startDate'];
        $course->endDate = $input['endDate'];
        $course->fee = $input['fee'];
        $course->category_id = $input['category_id'];
        $course->week = $input['week'];


        if( isset($input['image']) ){

            $file = $input['image'];
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $course->photo = $name;
        }

        $course->save();
        return $course;
    }

	public function  create($input){

       return $this->editOperation(new Course, $input);

	}

    public function update($id, $input){

    return $this->editOperation(Course::find($id), $input);

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

    public function getCategorizedCoursesUsers($name){

        $courses = Course::with('user')->whereHas("category", function($query) use ($name){

            $query->where("name", $name);

        });
        return $courses;
    }

    public  function getByTag($page = 1, $limit = 10, $name){

		$result = new \StdClass;
		$result->page = $page;
		$result->limit = $limit;
		$result->totalItems = 0;
		$result->items = array();
		$query = $this->getCategorizedCoursesUsers($name);
		$model = $query->skip($limit * ($page - 1))->take($limit)->get();
		$result->totalItems = $this->getCategorizedCoursesUsers($name)->count();
		$result->items = $model->all();
		return $result;
	}




}