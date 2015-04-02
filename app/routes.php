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

Route::get("courses/create",
["as" => "courses.create",
"uses" => "CourseController@create"])
->before("auth");

Route::get("courses/{courses}",
    ["as" => "courses.show",
        "uses" => "CoursesController@show"]
);
Route::group(array('before' => 'auth'), function(){
Route::get("/{users}/courses", [
			"as" => "users.courses",
			"uses" => "CoursesController@usercourses"
			]);

Route::get("/{users}/profile", [
			"as" => "users.profile",
			"uses" => "UsersController@show"
			]);
Route::resource("courses", "CoursesController");
});




Route::get("/user/profile", function(){
	$user = User::all();
	return $user;
});

Route::get("tags/{category}",[
	"as" => "courses.showByTag",
	"uses" => "CoursesController@showByTag"]);

Route::get('/test', function(){

    return View::make("layouts.partials.testnav");
});

