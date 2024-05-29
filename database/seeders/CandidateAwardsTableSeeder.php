<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CandidateAwardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Initialize Faker
        $faker = Faker::create();

        // Define the number of awards you want to create
        $numberOfAwards = 10;

        // Generate fake data for each award
        for ($i = 0; $i < $numberOfAwards; $i++) {
            DB::table('candidate_awards')->insert([
                'candidate_id' => $faker->numberBetween(1, 100),
                'title' => $faker->sentence(4),
                'description' => $faker->paragraph(3),
                'date' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
