<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id'); // Auto-incrementing integer for the primary key
            $table->string('name'); // VARCHAR for recipe name
            $table->unsignedBigInteger('user_id'); // Integer for referencing users
            $table->string('image')->nullable(); // Image as a VARCHAR, optional
            $table->text('description')->nullable(); // TEXT for recipe description
            $table->text('ingredients')->nullable();// TEXT for recipe instructions
            $table->text('instructions')->nullable();// TEXT for recipe instructions
            $table->integer('ratings')->default(0); // Integer for ratings, default to 0
            $table->string('categories')->nullable(); // Integer for categories, optional
            $table->string('status')->default(1); // Integer for status, default to 1
            $table->timestamps(); // Adds "created_at" and "updated_at" columns

            // Optional: Add a foreign key constraint if `user_id` references the `users` table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
