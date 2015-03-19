<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Event::listen('illuminate.query', function($sql){
// 	var_dump($sql);
// });
/** Sign up rote    */

Route::get('/signup', "RegistrationController@index");
Route::post('/signup', "RegistrationController@create");

Route::get('/', array( "as" => "home", "uses" => "CoursesController@index") );

Route::get('/login', "SessionController@create");
Route::get('/logout', "SessionController@destroy");
Route::resource("session", "SessionController");
Route::resource("users", "UsersController");

Route::group(array('before' => 'auth'), function(){
Route::get("/{users}/courses", [
			"as" => "users.courses",
			"uses" => "CoursesController@usercourses"
			]);

Route::get("/{users}/profile", [
			"as" => "users.profile",
			"uses" => "UsersController@show"
			]);
Route::get("/courses/create",[
			"as" => "courses.create",
			"uses" => "CoursesController@create"
	]);
Route::resource("courses", "CoursesController");
});


Route::get("/user/profile", function(){
	$user = User::all();
	return $user;
});

Route::get('/data',"CourseController@data");

Route::get('/test', function(){

	return $users = Course::with(array('user' =>
		function($query)
		{ $query->where('name', '=','MinSan');
	}))->first();

});