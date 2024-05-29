<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('orders')->insert([
                'company_id' => $faker->numberBetween(1, 10),
                'package_id' => $faker->numberBetween(1, 10),
                'order_no' => $faker->uuid,
                'paid_amount' => $faker->randomFloat(2, 100, 1000),
                'payment_method' => $faker->randomElement(['Credit Card', 'PayPal', 'Bank Transfer']),
                'start_date' => $faker->date,
                'expire_date' => $faker->date,
                'currently_active' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
