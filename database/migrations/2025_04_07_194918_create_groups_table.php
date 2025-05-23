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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('group_photo')->nullable();
            $table->enum('visibility', ['public', 'private'])->default('public');
        
            $table->unsignedBigInteger('chat_id');
            $table->foreign('chat_id')->references('id')->on('chats')->onDelete('cascade');
        
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
            $table->unsignedBigInteger('community_id');
            $table->foreign('community_id')->references('id')->on('communities')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
