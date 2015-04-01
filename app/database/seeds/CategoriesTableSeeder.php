<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		Category::truncate();
		$faker = Faker::create();

			Category::create([

				'name' => 'Web Development' 

			]);

			Category::create([

				'name' => 'English Learning' 

			]);

			Category::create([

				'name' => 'Photography' 

			]);

			Category::create([

				'name' => 'Cooking' 

			]);

			Category::create([

				'name' => 'Japan Learning' 

			]);

			Category::create([

				'name' => 'Thai' 

			]);
		}
	}

