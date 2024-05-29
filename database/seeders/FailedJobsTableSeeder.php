<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FailedJobsTableSeeder extends Seeder
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
            DB::table('failed_jobs')->insert([
                'uuid' => $faker->uuid,
                'connection' => $faker->word,
                'queue' => $faker->word,
                'payload' => $faker->text,
                'exception' => $faker->text,
                'failed_at' => now(),
            ]);
        }
    }
}
