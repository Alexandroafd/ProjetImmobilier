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
            $table->string('profession')->default('inconnu')->nullable(false)->change();
            $table->string('address')->default('inconnu')->nullable(false)->change();
            $table->string('postal_code')->default('00000')->nullable(false)->change();
            $table->string('city')->default('inconnu')->nullable(false)->change();
            $table->string('state')->default('inconnu')->nullable(false)->change();
            $table->string('about')->default('')->nullable(false)->change();
            $table->string('facebook')->default('')->nullable(false)->change();
            $table->string('twitter')->default('')->nullable(false)->change();
            $table->string('google')->default('')->nullable(false)->change();
            $table->string('linkedin')->default('')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profession')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('postal_code')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('state')->nullable()->change();
            $table->string('about')->nullable()->change();
            $table->string('facebook')->nullable()->change();
            $table->string('twitter')->nullable()->change();
            $table->string('google')->nullable()->change();
            $table->string('linkedin')->nullable()->change();
        });
    }
};
