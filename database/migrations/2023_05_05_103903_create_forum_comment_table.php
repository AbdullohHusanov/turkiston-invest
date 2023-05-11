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
        Schema::create('forum_comments', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->bigInteger('question_id')->unsigned();
            $table->bigInteger('client_id')->unsigned();
            $table->integer('parent_id')->nullable();
            $table->timestamps();
        });
        Schema::table('forum_comments', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('forums');
            $table->foreign('client_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_comments');
    }
};
