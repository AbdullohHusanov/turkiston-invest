<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuItem::insert([
            [
                'menu_id' => 1,
                'name' => 'Дом',
                'value' => '/',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'ru'
            ],[
                'menu_id' => 1,
                'name' => 'Блог',
                'value' => '/blog',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'ru'
            ],[
                'menu_id' => 1,
                'name' => 'Форум',
                'value' => '/forum',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'ru'
            ],[
                'menu_id' => 1,
                'name' => 'Home',
                'value' => '/',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'en'
            ],[
                'menu_id' => 1,
                'name' => 'Blog',
                'value' => '/blog',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'en'
            ],[
                'menu_id' => 1,
                'name' => 'Forum',
                'value' => '/forum',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'en'
            ],[
                'menu_id' => 1,
                'name' => 'Asosiy',
                'value' => '/',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'uzlt'
            ],[
                'menu_id' => 1,
                'name' => 'Blog',
                'value' => '/blog',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'uzlt'
            ],[
                'menu_id' => 1,
                'name' => 'Forum',
                'value' => '/forum',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'uzlt'
            ],[
                'menu_id' => 1,
                'name' => 'Асосий',
                'value' => '/',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'uzcr'
            ],[
                'menu_id' => 1,
                'name' => 'Блог',
                'value' => '/blog',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'uzcr'
            ],[
                'menu_id' => 1,
                'name' => 'Форум',
                'value' => '/forum',
                'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
                'target' => '_self',
                'parent_id' => null,
                'order' => true,
                'enabled' => true,
                'data' => null,
                'locale' => 'uzcr'
            ],
        ]);
    }
}
