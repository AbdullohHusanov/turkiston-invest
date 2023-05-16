<?php

namespace Database\Seeders;

use App\Models\ForumComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForumCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ForumComment::factory()
            ->count(15)
            ->create();
    }
}
