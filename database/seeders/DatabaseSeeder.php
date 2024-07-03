<?php


use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create some quizzes
        Quiz::factory(10)->create()->each(function ($quiz) {
            // Create some questions for each quiz
            Question::factory(5)->create(['quiz_id' => $quiz->id]);
        });
    }
}
