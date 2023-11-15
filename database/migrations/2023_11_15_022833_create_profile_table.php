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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title_landing_page');
            $table->string('title_profile_page');
            $table->longText('description_landing_page');
            $table->longText('description_profile_page');
            $table->longText('photo_landing_page')->nullable();
            $table->longText('photo_profile_page')->nullable();
            $table->longText('photo_faq_page')->nullable();
            $table->longText('photo_socmed')->nullable();
            $table->longText('photo_educations')->nullable();
            $table->longText('photo_experiences')->nullable();
            $table->longText('photo_organizations')->nullable();
            $table->longText('photo_social_activities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
