<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('img')->nullable()->default('/');
            $table->text('description_uz');
            $table->text('description_ru');
            $table->text('description_en');
            $table->bigInteger('created_by')->nullable()->unsigned()->default(null);
            $table->bigInteger('updated_by')->nullable()->unsigned()->default(null);
            $table->timestamps();
        });
        Schema::table('pages_categories', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        \App\Models\PagesCategories::insert([
            [
                'name_uz' => 'Barchasi',
                'name_ru' => 'Все',
                'name_en' => 'All',
                'description_uz' => 'Barchasi',
                'description_ru' => 'Все',
                'description_en' => 'All',
                'created_by' => \App\Models\User::all()->find(1)->id,
                'updated_by' => \App\Models\User::all()->find(1)->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_uz' => 'Yangiliklar',
                'name_ru' => 'Новости',
                'name_en' => 'News',
                'description_uz' => 'Yalikiklar',
                'description_ru' => 'Новости',
                'description_en' => 'News',
                'created_by' => \App\Models\User::all()->find(1)->id,
                'updated_by' => \App\Models\User::all()->find(1)->id,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages_categories');
    }
};
