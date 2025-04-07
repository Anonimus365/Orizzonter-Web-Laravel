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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('ranked')->default(0);
            $table->date('creation_date');
            $table->text('description')->nullable();
        
            $table->unsignedBigInteger('saved_route_id')->nullable();
            $table->foreign('saved_route_id')->references('id')->on('routes')->onDelete('set null');
        
            $table->unsignedBigInteger('route_detail_id');
            $table->foreign('route_detail_id')->references('id')->on('route_details')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
