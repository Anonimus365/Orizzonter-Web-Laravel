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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('gender')->nullable();
            $table->string('profile_ph')->nullable();
            $table->text('description')->nullable();
            $table->string('nickname')->unique();
            $table->string('cyclist_type');
            $table->json('social_media')->nullable();
            $table->integer('busy_routes')->default(0);
            $table->text('achievements')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('interest_place_id')->nullable();
            $table->foreign('interest_place_id')->references('id')->on('interest_places')->onDelete('set null');

            $table->unsignedBigInteger('configuration_id')->nullable();
            $table->foreign('configuration_id')->references('id')->on('configurations')->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
