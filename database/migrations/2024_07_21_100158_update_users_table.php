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
        Schema::table('users', function (Blueprint $table) {
            $table->string('github')->nullable()->default('Place Your GitHub URL ')->after('profile');
            $table->string('twitter')->nullable()->default('Place Your Twitter URL ')->after('profile');
            $table->string('linkedin')->nullable()->default('Place Your Linkedin URL ')->after('profile');
            $table->string('portfolio')->nullable()->default('Place Your Portfolio URL ')->after('profile');
            $table->string('contact')->nullable()->default('Enter Your Phone Number ')->after('profile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('github');
            $table->dropColumn('twitter');
            $table->dropColumn('linkedin');       
            $table->dropColumn('portfolio');
            $table->dropColumn('contact');
        });
    }
};
