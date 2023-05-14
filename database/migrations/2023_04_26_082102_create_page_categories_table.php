<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_categories', function (Blueprint $table) {
            $table->bigInteger('page_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('page_categories', function (Blueprint $table) {
            $table->foreign('page_id')->references('id')->on('pages');
            $table->foreign('category_id')->references('id')->on('pages_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_categories');
    }
};
