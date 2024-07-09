<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddStatusToQuizzesTable extends Migration
{
    public function up()
    {
        // Check if the column doesn't already exist before adding it
        if (!Schema::hasColumn('quizzes', 'status')) {
            Schema::table('quizzes', function (Blueprint $table) {
                $table->string('status')->default('active');
            });
        }
    }

    public function down()
    {
        // Check if the column exists before dropping it
        if (Schema::hasColumn('quizzes', 'status')) {
            Schema::table('quizzes', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
    }
}
