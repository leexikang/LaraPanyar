<?php namespace Panyar\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider{

	public function register(){

		$this->app->bind('Panyar\Repositories\CoursesrRepositoryInterface', 
			 		    'Panyar\Repositories\CoursesRepository');

	}
}