<?php namespace Panyar\Services\Validation;

class CourseValidator extends Validator{

	public static $rules = [
		 'name' =>'required',
		 'startDate' => 'date_format:m/d/Y',
		 'endDate' => 'date_format:m/d/Y'
		 ];
}