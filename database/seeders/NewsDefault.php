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
            Article::create([
                'title' => $faker->sentence,
                'subtitle' => $faker->sentence,
                'body' => $faker->paragraph,
                'relevance' => (int)$faker->boolean,
                'image' => "",
                'bgcolor' => 'white',
                'fgcolor' => 'black'
                
            ]);
        }
        
    }
}
