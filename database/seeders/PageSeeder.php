<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::factory()
            ->count(5)
            ->create();

        PageCategories::insert([
            [
                'page_id' => 1,
                'category_id' => 1
            ],[
                'page_id' => 2,
                'category_id' => 1
            ],[
                'page_id' => 3,
                'category_id' => 1
            ],[
                'page_id' => 4,
                'category_id' => 1
            ],[
                'page_id' => 5,
                'category_id' => 1
            ],[
                'page_id' => 3,
                'category_id' => 2
            ],[
                'page_id' => 5,
                'category_id' => 2
            ],[
                'page_id' => 4,
                'category_id' => 2
            ]
        ]);
    }
}
