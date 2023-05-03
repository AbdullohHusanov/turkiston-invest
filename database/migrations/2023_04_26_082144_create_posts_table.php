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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('slug');
            $table->integer('view')->default(0);
            $table->text('content_uz');
            $table->text('content_ru');
            $table->text('content_en');
            $table->string('img')->nullable()->default('/logo-social.png');
            $table->bigInteger('created_by')->unsigned()->nullable()->default(null);
            $table->bigInteger('updated_by')->unsigned()->nullable()->default(null);
//            $table->bigInteger('template_id')->unsigned()->nullable()->default(null);
            $table->timestamps();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
//            $table->foreign('template_id')->references('id')->on('templates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
