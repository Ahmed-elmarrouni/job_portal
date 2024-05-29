<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CandidateEducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('candidate_education')->insert([
                'candidate_id' => $faker->numberBetween(1, 100),
                'level' => $faker->randomElement(['High School', 'Bachelor', 'Master', 'PhD']),
                'institute' => $faker->company,
                'degree' => $faker->word,
                'passing_year' => $faker->year,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
