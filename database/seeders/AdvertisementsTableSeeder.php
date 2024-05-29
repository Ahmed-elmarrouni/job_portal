<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AdvertisementsTableSeeder extends Seeder
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
            DB::table('advertisements')->insert([
                'job_listing_ad' => $faker->imageUrl,
                'job_listing_ad_url' => $faker->url,
                'job_listing_ad_status' => $faker->randomElement(['Active', 'Inactive']),
                'company_listing_ad' => $faker->imageUrl,
                'company_listing_ad_url' => $faker->url,
                'company_listing_ad_status' => $faker->randomElement(['Active', 'Inactive']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
