<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JobsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('jobs')->insert([
                'company_id' => $faker->numberBetween(1, 10),
                'title' => $faker->jobTitle,
                'description' => $faker->paragraph,
                'responsibility' => $faker->paragraph,
                'skill' => $faker->word,
                'education' => $faker->word,
                'benefit' => $faker->paragraph,
                'deadline' => $faker->dateTime,
                'vacancy' => $faker->numberBetween(1, 10),
                'job_category_id' => $faker->numberBetween(1, 10),
                'job_location_id' => $faker->numberBetween(1, 10),
                'job_type_id' => $faker->numberBetween(1, 10),
                'job_experience_id' => $faker->numberBetween(1, 10),
                'job_gender_id' => $faker->numberBetween(1, 10),
                'job_salary_range_id' => $faker->numberBetween(1, 10),
                'map_code' => $faker->sentence,
                'is_featured' => $faker->boolean,
                'is_urgent' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
