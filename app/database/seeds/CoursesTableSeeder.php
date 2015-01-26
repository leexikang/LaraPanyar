<?php
use Faker\Factory as Faker;
class CoursesTableSeeder extends Seeder{

	public function run(){

		Course::truncate();
		$faker = Faker::create();
		foreach ( range(1, 10) as $index){

			Course::create([
				'name' => $faker->sentence(5),
				'description' => $faker->paragraph(3),
				'note' => $faker->paragraph(1),
				'startTime' => $faker->time(),
				'endTime' => $faker->time(),
				'startDate' => $faker->date(),
				'endDate' => $faker->date(),
				'fee' => $faker->numberBetween(1000, 100000),
				'photo' => $faker->sentence(2),
				'user_id' => $faker->numberBetween(1, 10)

				]);
		}
		foreach ( range(1, 6) as $index){

			Course::create([
				'name' => $faker->sentence(5),
				'description' => $faker->paragraph(3),
				'note' => $faker->paragraph(1),
				'startTime' => $faker->time(),
				'endTime' => $faker->time(),
				'startDate' => $faker->date(),
				'endDate' => $faker->date(),
				'fee' => $faker->numberBetween(1000, 100000),
				'photo' => $faker->sentence(2),
				'user_id' => 11

				]);
		}
	}
}