<?php

namespace Database\Seeders;

use App\Models\PostComments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostComment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostComments::factory()
            ->count(5)
            ->create();
    }
}
