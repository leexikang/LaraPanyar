<?php
/**
 * Created by PhpStorm.
 * User: xikang
 * Date: 3/31/15
 * Time: 5:48 PM
 */
use Faker\Factory as Faker;

class CategoryCourseTableSeeder extends  Seeder{




	public function run()
	{
        DB::statement("SET foreign_key_checks = 0");
        DB::table('category_course')->truncate();
		$faker = Faker::create();
        $courseId = Course::lists('id');
        $categoryId = Category::lists('id');
        DB::statement("SET foreign_key_checks = 1");

        foreach(range(1,20) as $index){

            DB::table("category_course")->insert([

                "category_id" => $faker->randomElement($categoryId),
                "course_id" => $faker->randomElement($courseId)
            ]);
        }

        foreach(range(1,20) as $index){

            DB::table("category_course")->insert([

                "category_id" => 1,
                "course_id" => $faker->randomElement($courseId)
            ]);
        }

}}