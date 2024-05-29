<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            'Location 1',
            'Location 2',
            'Location 3',
            'Location 4',
            'Location 5',
            'Location 6',
            'Location 7',
            'Location 8',
            'Location 9',
            'Location 10',
        ];

        foreach ($locations as $location) {
            DB::table('company_locations')->insert([
                'name' => $location,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
