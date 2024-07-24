<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToQuizSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::table('quiz_submissions', function (Blueprint $table) {
            if (!Schema::hasColumn('quiz_submissions', 'user_id')) {
                // Add the user_id column
                $table->unsignedBigInteger('user_id')->after('quiz_id');

                // Define a foreign key constraint on the user_id column
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('quiz_submissions', function (Blueprint $table) {
            if (Schema::hasColumn('quiz_submissions', 'user_id')) {
                // Drop the foreign key constraint
                $table->dropForeign(['user_id']);
                
                // Drop the user_id column
                $table->dropColumn('user_id');
            }
        });
    }
}
