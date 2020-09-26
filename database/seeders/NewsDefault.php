<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class NewsDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 15; $i++) { 
            $text = $faker->paragraph;
            Article::create([
                'title' => $faker->sentence,
                'subtitle' => $faker->sentence,
                'body' => $text,
                'relevance' => (int)$faker->boolean,
                'image' => "cat.jpg",
                'bgcolor' => 'white',
                'fgcolor' => 'black',
                'body_raw' => $text,
                'author' => $faker->name
                
            ]);
        }
        
    }
}
