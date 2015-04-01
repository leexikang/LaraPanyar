<?php
use Faker\Factory as Faker;
class CoursesTableSeeder extends Seeder{

	public function run(){

		Course::truncate();
		$faker = Faker::create();
        $userId = User::lists('id');
        $categoryId = Category::lists('id');
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
                'user_id' => $faker->randomElement($userId),
                'category_id' => $faker->randomElement($categoryId)

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
				'user_id' => 11,
                'category_id' => $faker->randomElement($categoryId)

				]);
		}
	}
}