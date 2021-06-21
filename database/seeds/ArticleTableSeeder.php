<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo data fake mẫu
        $faker = Faker\Factory::create();
        for ($i=0; $i < 100; $i++) { 
            $articles = new Article;
            $articles->title = $faker->text;
            $articles->content = $faker->text;
            $articles->save();
        }
    }
}