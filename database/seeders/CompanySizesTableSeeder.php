<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.!
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            'Small',
            'Medium',
            'Large',
        ];

        foreach ($sizes as $size) {
            DB::table('company_sizes')->insert([
                'name' => $size,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
