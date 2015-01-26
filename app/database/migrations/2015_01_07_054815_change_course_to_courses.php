<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCourseToCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::rename('course', 'courses');
		Schema::table('courses', function(Blueprint $table)
		{
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::rename('courses', 'course');
		Schema::table('courses', function(Blueprint $table)
		{
			//
		});
	}

}
