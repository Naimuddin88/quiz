<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToQuizAnswersTable extends Migration
{
    public function up()
    {
        Schema::table('quiz_answers', function (Blueprint $table) {
            if (!Schema::hasColumn('quiz_answers', 'user_id')) {
                $table->unsignedBigInteger('user_id')->after('answer');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('quiz_answers', function (Blueprint $table) {
            if (Schema::hasColumn('quiz_answers', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
        });
    }
}