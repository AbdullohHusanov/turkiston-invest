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
        Schema::create('main_page_config', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->enum('type',['string','file','boolean','number']);
            $table->string('value');
            $table->boolean('deletable')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_page_config');
    }
};
