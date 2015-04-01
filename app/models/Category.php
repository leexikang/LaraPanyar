<?php

class Category extends \Eloquent {
	protected $fillable = [];

	public function courses(){

		return $this->hasMany('Course');
		
	}
}