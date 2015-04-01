<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'name' => $faker->username,
				'password' => $faker->word,
				'email' => $faker->email,
				'address' => $faker->address,
				'intro' => $faker->paragraph(3)
				]) ;
		}
		User::create([
			'name' => 'MinSan', 
			'password' => '123', 
			'email' => 'minsan@gmail.com', 
			'address' => $faker->address,
			'intro' => $faker->paragraph(3)
			]) ;
	}
}