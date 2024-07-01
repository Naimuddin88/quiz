<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Answer;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            Question::truncate();
            Answer::truncate();
            
            $questionAndAnswers = $this->getData();

            $questionAndAnswers->each(function ($question) {
                $createdQuestion = Question::create([
                    'text' => $question['question'],
                    'points' => (int) $question['points'], // Cast points to integer
                ]);

                collect($question['answers'])->each(function ($answer) use ($createdQuestion) {
                    Answer::create([
                        'question_id' => $createdQuestion->id,
                        'text' => $answer['text'],
                        'correct_one' => $answer['correct_one'],
                    ]);
                });
            });
        });
    }

    /**
     * Get the data for seeding.
     *
     * @return \Illuminate\Support\Collection
     */
    private function getData()
    {
        return collect([
            [
                'question' => 'When did World War 2 end?',
                'points' => '1',
                'answers' => [
                    ['text' => '1939', 'correct_one' => false],
                    ['text' => '1941', 'correct_one' => false],
                    ['text' => '1945', 'correct_one' => true],
                ],
            ],
            [
                'question' => 'Who discovered America?',
                'points' => '1',
                'answers' => [
                    ['text' => 'Adolf Hitler', 'correct_one' => false],
                    ['text' => 'Napoleon Bonaparte', 'correct_one' => false],
                    ['text' => 'Christopher Columbus', 'correct_one' => true],
                ],
            ],
        ]);
    }
}
