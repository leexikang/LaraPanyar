<?php

use Carbon\Carbon;

class Course extends Eloquent{

	protected $guarded = ['id', 'created_at', 'updated_at'];


	public function user(){

		return $this->belongsTo('User', 'user_id');
	}	

	public function categories(){

		return $this->belongsToMany('Category');
	}


	protected function formatTime($raw){

		$time = Carbon::createFromFormat('g:i A', $raw);
		return $time->format('H:i');

	}

	 protected function formatReturnTime($value){

	 	return date('h:i a', strtotime($value) );

	 }

		public function setPasswordAttribute($value){

		$this->attributes['password'] = Hash::make($value);

	}

	public function setStartTimeAttribute($value){

		$this->attributes['startTime'] = $this->formatTime($value);
	}

	 public function getStartTimeAttribute($value){

	 	return $this->formatReturnTime($value);
	 }


	public function setEndTimeAttribute($value){

		$this->attributes['endTime'] = $this->formatTime($value);

	}

	public function getEndTimeAttribute($value){

	 	return $this->formatReturnTime($value);
	}


	public function getDescriptionAttribute($value){

		$paragraph = nl2br($value);
		return $paragraph;
	}


}