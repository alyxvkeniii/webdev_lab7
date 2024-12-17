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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id'); // Auto-incrementing primary key
            $table->unsignedBigInteger('recipe_id'); // Integer to reference the recipe
            $table->unsignedBigInteger('user_id'); // Integer to reference the user
            $table->text('comment'); // TEXT for the comment
            $table->timestamps(); // Adds "created_at" and "updated_at" columns

            // Optional: Add foreign key constraints
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
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
        Schema::dropIfExists('comments');
    }
};
