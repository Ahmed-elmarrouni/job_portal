<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompaniesTableSeeder extends Seeder
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
            DB::table('companies')->insert([
                'company_name' => $faker->company,
                'person_name' => $faker->name,
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'token' => str_random(10),
                'logo' => $faker->imageUrl,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'company_location_id' => $faker->numberBetween(1, 10), // Assuming you have 10 company locations
                'company_industry_id' => $faker->numberBetween(1, 10), // Assuming you have 10 company industries
                'company_size_id' => $faker->numberBetween(1, 10), // Assuming you have 10 company sizes
                'founded_on' => $faker->date,
                'website' => $faker->url,
                'description' => $faker->paragraph,
                'oh_mon' => $faker->time(),
                'oh_tue' => $faker->time(),
                'oh_wed' => $faker->time(),
                'oh_thu' => $faker->time(),
                'oh_fri' => $faker->time(),
                'oh_sat' => $faker->time(),
                'oh_sun' => $faker->time(),
                'map_code' => $faker->text,
                'facebook' => $faker->url,
                'twitter' => $faker->url,
                'linkedin' => $faker->url,
                'instagram' => $faker->url,
                'status' => $faker->randomElement(['Active', 'Inactive']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
