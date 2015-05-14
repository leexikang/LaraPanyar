<?php namespace Panyar\Services\Validation;

use Validator as V;

abstract class Validator{

	protected $errors;
	public static $rules;

	public function validate($input){

		$validator = V::make($input, static::$rules);
		if ( $validator->fails() ){

			$this->errors = $validator->messages();
			return true;
		}
		return false;


	}

	public function errors(){

		return $this->errors;
	} 
}
