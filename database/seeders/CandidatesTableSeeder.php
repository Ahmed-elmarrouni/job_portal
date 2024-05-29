<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CandidatesTableSeeder extends Seeder
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
            DB::table('candidates')->insert([
                'name' => $faker->name,
                'designation' => $faker->jobTitle,
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'token' => str_random(10),
                'photo' => $faker->imageUrl,
                'biography' => $faker->paragraph,
                'phone' => $faker->phoneNumber,
                'country' => $faker->country,
                'address' => $faker->address,
                'state' => $faker->state,
                'city' => $faker->city,
                'zip_code' => $faker->postcode,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'marital_status' => $faker->randomElement(['Single', 'Married', 'Divorced']),
                'date_of_birth' => $faker->date,
                'website' => $faker->url,
                'status' => $faker->randomElement(['Active', 'Inactive']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
