<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyIndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
            'Industry 1',
            'Industry 2',
            'Industry 3',
            'Industry 4',
            'Industry 5',
            'Industry 6',
            'Industry 7',
            'Industry 8',
            'Industry 9',
            'Industry 10',
        ];

        foreach ($industries as $industry) {
            DB::table('company_industries')->insert([
                'name' => $industry,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
