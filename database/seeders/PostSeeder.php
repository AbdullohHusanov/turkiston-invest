<?php

namespace Database\Seeders;

use App\Models\PostCategories;
use App\Models\PostComments;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()
            ->count(5)
            ->create();

        PostCategories::insert([
            [
                'post_id' => 1,
                'category_id' => 1
            ],[
                'post_id' => 2,
                'category_id' => 1
            ],[
                'post_id' => 3,
                'category_id' => 1
            ],[
                'post_id' => 4,
                'category_id' => 1
            ],[
                'post_id' => 5,
                'category_id' => 1
            ],[
                'post_id' => 3,
                'category_id' => 2
            ],[
                'post_id' => 5,
                'category_id' => 2
            ],[
                'post_id' => 4,
                'category_id' => 2
            ]
        ]);
    }
}
