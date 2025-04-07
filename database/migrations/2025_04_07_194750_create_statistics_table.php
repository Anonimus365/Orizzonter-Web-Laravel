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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();

            $table->integer('total_rides')->default(0);
            $table->decimal('total_distance', 8, 2)->default(0.00);
            $table->integer('total_time')->default(0);
            $table->decimal('calories_burned', 8, 2)->default(0.00);
            $table->decimal('average_speed', 5, 2)->default(0.00);
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};
