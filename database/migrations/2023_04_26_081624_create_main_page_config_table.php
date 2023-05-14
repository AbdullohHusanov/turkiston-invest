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
        Schema::create('main_page_config', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->enum('type', ['string', 'file', 'boolean', 'number']);
            $table->text('value');
            $table->boolean('deletable')->default(false);
            $table->timestamps();
        });

        \App\Models\MainPageConfig::insert([
            [
                'key' => 'news_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'most_viewed_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'blog_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'mission_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'contact_us_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'about_us_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'call_back_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'results_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'team_enable',
                'value' => 'true',
                'type' => 'boolean',
                'deletable' => false
            ], [
                'key' => 'result_year_experience',
                'value' => 15,
                'type' => 'number',
                'deletable' => false
            ], [
                'key' => 'result_shareholders',
                'value' => 2000,
                'type' => 'number',
                'deletable' => false
            ], [
                'key' => 'result_bonds',
                'value' => 15000,
                'type' => 'number',
                'deletable' => false
            ], [
                'key' => 'mission_img_light',
                'value' => '/storage/logo-big-light.svg',
                'type' => 'file',
                'deletable' => false
            ], [
                'key' => 'mission_img_dark',
                'value' => '/storage/logo-big-dark.svg',
                'type' => 'file',
                'deletable' => false
            ], [
                'key' => 'mission_text',
                'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Let reset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'type' => 'string',
                'deletable' => false
            ], [
                'key' => 'call_back_phone',
                'value' => '+99899 999 99 99',
                'type' => 'string',
                'deletable' => false
            ], [
                'key' => 'call_back_email',
                'value' => 'turkistan_invest@mail.ru',
                'type' => 'string',
                'deletable' => false
            ], [
                'key' => 'call_back_location',
                'value' => 'bsb8s0bf78sf0sb8 f0sb087fhb0 fhd89b sb8df7bs78fs89 fhs7gf',
                'type' => 'string',
                'deletable' => false
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_page_config');
    }
};
