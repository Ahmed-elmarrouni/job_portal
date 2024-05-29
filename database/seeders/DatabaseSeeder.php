<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'logo' => 'default-logo.png',
            'favicon' => 'default-favicon.png',
            'top_bar_phone' => '123-456-7890',
            'top_bar_email' => 'info@example.com',
            'footer_phone' => '123-456-7890',
            'footer_email' => 'info@example.com',
            'footer_address' => '123 Main St, USA',
            'facebook' => 'https://facebook.com/yourpage',
            'twitter' => 'https://twitter.com/yourpage',
            'linkedin' => 'https://linkedin.com/yourpage',
            'instagram' => 'https://instagram.com/yourpage',
            'copyright_text' => '© 2024 Your Company. All rights reserved.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
