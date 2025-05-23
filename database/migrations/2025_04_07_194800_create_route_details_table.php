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
        Schema::create('route_details', function (Blueprint $table) {
            $table->id();

            $table->enum('difficulty', ['easy', 'medium', 'hard']);
            $table->string('terrain_type', 50);
            $table->integer('duration');
            $table->decimal('distance', 8, 2);
        
            $table->unsignedBigInteger('statistics_id');
            $table->foreign('statistics_id')->references('id')->on('statistics')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_details');
    }
};
