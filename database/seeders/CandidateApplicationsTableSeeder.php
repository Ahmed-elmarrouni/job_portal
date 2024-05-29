<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CandidateApplicationsTableSeeder extends Seeder
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
            DB::table('candidate_applications')->insert([
                'candidate_id' => $faker->numberBetween(1, 100),
                'job_id' => $faker->numberBetween(1, 100),
                'cover_letter' => $faker->paragraph,
                'status' => $faker->randomElement(['Submitted', 'Under Review', 'Accepted', 'Rejected']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}