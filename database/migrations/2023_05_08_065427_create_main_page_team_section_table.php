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
        Schema::create('main_page_team_section', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable()->default('/unnamed.jpg');
            $table->string('full_name');
            $table->string('position');
            $table->timestamps();
        });

        \App\Models\MainPageTeamSection::insert([
            [
                'full_name' => 'oasdngo isdnon',
                'position' => 'kksndo'
            ],[
                'full_name' => 'oasdngo isdnon',
                'position' => 'kksndo'
            ],[
                'full_name' => 'oasdngo isdnon',
                'position' => 'kksndo'
            ],[
                'full_name' => 'oasdngo isdnon',
                'position' => 'kksndo'
            ],[
                'full_name' => 'oasdngo isdnon',
                'position' => 'kksndo'
            ],[
                'full_name' => 'oasdngo isdnon',
                'position' => 'kksndo'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_page_team_section');
    }
};
