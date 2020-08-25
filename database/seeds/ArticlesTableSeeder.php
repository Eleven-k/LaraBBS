<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class)->time(100)->create();
    }
}
