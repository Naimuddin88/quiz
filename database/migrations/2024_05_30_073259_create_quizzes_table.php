<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    // public function up()
    // {
    //     Schema::create('quizzes', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         // $table->string('status')->default('pending')->change();
    //         $table->string('status')->default('active'); 
    //         // $table->string('question')->nullable();
    //         $table->string('time')->after('status'); 
    //         // $table->string('time')->nullable(); 
    //         $table->string('Tmark');
    //         $table->string('Pmark'); 
    //     });
    // }
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('active');
            $table->string('time'); // Do not use 'after' here
            $table->string('Tmark');
            $table->string('Pmark');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
