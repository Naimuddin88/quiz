<!DOCTYPE html>
<html>
<head>
    <title>Questions</title>
</head>
<body>
    <ul>
        @php
            // Ensure we only take 6 options, even if there are more
            $options = $question->options->take(6);
            $optionCount = count($options);
        @endphp

        @foreach($options as $option)
            <li>
                <input type="radio" id="option{{ $option->id }}" name="questions[{{ $question->id }}]" value="{{ $option->id }}">
                <label for="option{{ $option->id }}">{{ $option->option_text }}</label>
            </li>
        @endforeach

        @for ($i = $optionCount; $i < 6; $i++)
            <li>
                <input type="radio" id="option{{ $i }}" name="questions[{{ $question->id }}]" value="option{{ $i }}">
                <label for="option{{ $i }}">Option {{ $i + 1 }}</label>
            </li>
        @endfor
    </ul>
</body>
</html>
