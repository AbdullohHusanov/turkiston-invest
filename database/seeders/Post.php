<?php

namespace Database\Seeders;

use App\Models\PostComments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Post::factory()
            ->count(5)
            ->has(PostComments::factory()->count(4)->create())
            ->create();
    }
}
