<?php

class Category extends Eloquent {

	protected $guarded = [];

	public function courses(){

		return $this->belongsToMany('Course');
	}



}
