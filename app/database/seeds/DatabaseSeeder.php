<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement("SET foreign_key_checks = 0");
		Eloquent::unguard();

//        DB::table('users')->truncate();
//        DB::table('courses')->truncate();
//        DB::table('categories')->truncate();
		$this->call('UsersTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('CoursesTableSeeder');
	}

}
