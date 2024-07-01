@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $quiz->name }}</h1>
    <p>Time: {{ $quiz->time }}</p>
    <p>Total Marks: {{ $quiz->Tmark }}</p>
    <p>Passing Marks: {{ $quiz->Pmark }}</p>

    <h2>Questions</h2>
    @if($quiz->questions && $quiz->questions->count() > 0)
        <form action="{{ route('submit.quiz', $quiz->id) }}" method="POST">
            @csrf
            <ul>
                @foreach ($quiz->questions as $question)
                    <li>
                        {{ $question->question }}
                        
                        <ul>
                            @foreach($question->options as $option)
                                <li>
                                    <div class="mb-3 py-3"><span class="font-semibold text-[18px]">3.<!-- --> <!-- -->Command to start Laravel Application?</span><div class="flex ml-4 p-1"><div class="flex justify-start w-full items-center"><input id="question-361-0" type="radio" name="question2" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 mt-[4px]" value="php artisan new"><label for="question-361-0" class="ml-2 w-full flex justify-start items-center hover:bg-gray-100 rounded-sm h-8 text-sm font-medium text-gray-900 mt-[1px] cursor-pointer"><span class="text-[15px] ml-2">php artisan new</span></label></div></div><div class="flex ml-4 p-1"><div class="flex justify-start w-full items-center"><input id="question-362-1" type="radio" name="question2" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 mt-[4px]" value="php artisan"><label for="question-362-1" class="ml-2 w-full flex justify-start items-center hover:bg-gray-100 rounded-sm h-8 text-sm font-medium text-gray-900 mt-[1px] cursor-pointer"><span class="text-[15px] ml-2">php artisan</span></label></div></div><div class="flex ml-4 p-1"><div class="flex justify-start w-full items-center"><input id="question-363-2" type="radio" name="question2" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 mt-[4px]" value="php artisan start"><label for="question-363-2" class="ml-2 w-full flex justify-start items-center hover:bg-gray-100 rounded-sm h-8 text-sm font-medium text-gray-900 mt-[1px] cursor-pointer"><span class="text-[15px] ml-2">php artisan start</span></label></div></div><div class="flex ml-4 p-1"><div class="flex justify-start w-full items-center"><input id="question-364-3" type="radio" name="question2" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 mt-[4px]" value="php artisan serve"><label for="question-364-3" class="ml-2 w-full flex justify-start items-center hover:bg-gray-100 rounded-sm h-8 text-sm font-medium text-gray-900 mt-[1px] cursor-pointer"><span class="text-[15px] ml-2">php artisan serve</span></label></div></div><button class="flex gap-2 justify-center items-center ml-5 mt-2 h-10 w-36 bg-gray-200 rounded-md" id="headlessui-disclosure-button-:R1gekq6:" type="button" aria-expanded="true" data-headlessui-state="open" aria-controls="headlessui-disclosure-panel-:R2gekq6:"><span>Check Answer</span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="transform rotate-90 text-[13px] mt-[3px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path></svg></button><div class="text-gray-500 ml-5 mt-2 px-3 flex flex-wrap bg-gray-200 h-10 p-2 rounded-md" id="headlessui-disclosure-panel-:R2gekq6:" data-headlessui-state="open">Correct Answer - 4. php artisan serve</div></div>
                                    <input type="radio" id="option{{ $option->id }}" name="questions[{{ $question->id }}]" value="{{ $option->id }}">
                                    <label for="option{{ $option->id }}">{{ $option->option_text }}</label>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
            <button type="submit" class="btn btn-primary">Submit Quiz</button>
        </form>
    @else
        <p>No questions available for this quiz.</p>
    @endif
</div>
@endsection
