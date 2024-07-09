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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Role')->default('user')->change();
            $table->string('password');
            $table->string('description')->default('No description'); 
            $table->string('status')->default('active');
            // $table->string('gender')->nullable()->after('email');
            // $table->string('address')->nullable()->after('gender');
            // $table->string('city')->nullable()->after('address');
            // $table->string('number')->nullable()->after('gender');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
