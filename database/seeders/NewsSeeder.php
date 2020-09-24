<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $colors = ['#6a3e19', '#293146', '#2fafcc'];
        $fgcolors = ['white','black'];
        //

        for ($i=0; $i < 100; $i++) { 
            Article::create([
                'title' => $faker->sentence,
                'subtitle' => $faker->sentence,
                'body' => $faker->paragraph,
                'relevance' => (int)$faker->boolean,
                'image' => "dog.jpg",
                'bgcolor' => $colors[array_rand($colors,1)],
                'fgcolor' => 'white'
                
            ]);
        }
        
    }
}
