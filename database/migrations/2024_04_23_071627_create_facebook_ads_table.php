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
        Schema::create('facebook_ads', function (Blueprint $table) {
            $table->id();
            $table->string('image_url', 500)->nullable();
            $table->string('title_link', 500);
            $table->string('ad_id');
            $table->string('status');
            $table->string('fetched_at')->nullable();
            $table->string('sponsored');
            $table->string('button');
            $table->string('title');
            $table->text('description');
            $table->string('avatar', 500);
            $table->text('target_description');
            $table->string('target_url',500);
            $table->string('target_button');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facebook_ads');
    }
};
