<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('login', function (Blueprint $table) {
            $table->string('email')->unique()->after('id'); // Add the email column
            $table->string('password')->after('email'); // Add the password column
        });
    }

    public function down(): void
    {
        Schema::table('login', function (Blueprint $table) {
            $table->dropColumn('email'); // Drop the email column
            $table->dropColumn('password'); // Drop the password column
        });
    }
};
