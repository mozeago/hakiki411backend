<?php

use App\News;
use Faker\Factory;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            News::create(
                [
                'title' => $faker->sentence,
                'summary' => $faker->paragraph,
                'category' => 'Fake News',
                'imageUrl' => $faker->imageUrl($width =480, $height = 640),
                'points' => $faker->unique()->randomDigit,
                ]
            );
        }
    }
}
