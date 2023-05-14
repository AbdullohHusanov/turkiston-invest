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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->string('title_question');
            $table->text('description_question');
            $table->bigInteger('client_id')->unsigned();
            $table->integer('view')->default(0);
            $table->string('slug');
            $table->timestamps();
        });
        Schema::table('forums', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum');
    }
};
