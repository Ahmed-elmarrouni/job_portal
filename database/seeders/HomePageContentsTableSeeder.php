<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HomePageContentsTableSeeder extends Seeder
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
            DB::table('home_page_contents')->insert([
                'heading' => $faker->sentence,
                'text' => $faker->paragraph,
                'job_title' => $faker->jobTitle,
                'job_category' => $faker->word,
                'job_location' => $faker->city,
                'search' => $faker->boolean,
                'background' => $faker->imageUrl(),
                'job_category_heading' => $faker->sentence,
                'job_category_subheading' => $faker->sentence,
                'job_category_status' => $faker->boolean,
                'why_choose_heading' => $faker->sentence,
                'why_choose_subheading' => $faker->sentence,
                'why_choose_background' => $faker->imageUrl(),
                'why_choose_status' => $faker->boolean,
                'featured_jobs_heading' => $faker->sentence,
                'featured_jobs_subheading' => $faker->sentence,
                'featured_jobs_status' => $faker->boolean,
                'testimonial_heading' => $faker->sentence,
                'testimonial_background' => $faker->imageUrl(),
                'testimonial_status' => $faker->boolean,
                'blog_heading' => $faker->sentence,
                'blog_subheading' => $faker->sentence,
                'blog_status' => $faker->boolean,
                'title' => $faker->sentence,
                'meta_description' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
