<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('options', function (Blueprint $table) {
            $table->string('option_text');
            $table->boolean('is_correct')->default(false);
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('options', function (Blueprint $table) {
            //
        });
    }
};
