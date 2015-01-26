<?php

use Carbon\Carbon;

class Course extends Eloquent{

	protected $guarded = [];


	public function user(){

		return $this->belongsTo('User', 'user_id');
	}	


	protected function formatTime($raw){

		$time = Carbon::createFromFormat('g:i A', $raw);
		return $time->format('H:i');

	}


	protected function formatDate($raw){

		$date = Carbon::createFromFormat('m/d/Y', $raw);
		return $date->format('Y-m-d');
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

	public function setStartDateAttribute($value){

		$this->attributes['startDate'] = $this->formatDate($value); 

	}

	public function setEndDateAttribute($value){

		$this->attributes['endDate'] = $this->formatDate($value); 
		
	}

	public function getDescriptionAttribute($value){

		$paragraph = nl2br($value);
		return $paragraph;
	}
}