<?php
/**
 * Created by PhpStorm.
 * User: xikang
 * Date: 3/27/15
 * Time: 3:22 PM
 */

namespace Panyar\Repositories;
use Category;
use Course;

class CategoryRepository implements CategoryRepositoryInterface{

   public  function getAll(){

       return Category::all();
   }

	protected function make( array $with = array()){

		return Category::with($with);

	}

    public function getCategorizedCoursesUsers($name){

        $courses = Course::with('user')->whereHas("categories", function($query) use ($name){

            $query->where("name", $name);

        });
        return $courses;
    }

    public  function getByPage($page = 1, $limit = 10, $name){

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