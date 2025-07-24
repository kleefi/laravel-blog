<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->uuid('category_id')->nullable();
            $table->uuid('user_id')->nullable();
            $table->string('image');
            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('is_slider')->default(false);
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};