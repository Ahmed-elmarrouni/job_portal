<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompanyPhotosTableSeeder extends Seeder
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
            DB::table('company_photos')->insert([
                'company_id' => $faker->numberBetween(1, 10), 
                'photo' => $faker->imageUrl,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
