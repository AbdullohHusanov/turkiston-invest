<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Forum extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Forum::factory()
            ->count(5)
            ->has(\App\Models\ForumComment::factory()->count(3)->create())
            ->create();
    }
}
