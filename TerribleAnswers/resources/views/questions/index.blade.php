@extends('template');

@section('content')


    <div class="container text-center">
        <h1> Recent Questions </h1>
        <hr />

    @foreach($questions as $question)
    <div class="well">
        <h2>{{ $question -> title }}</h2>

        <p class="lead">
            {{ $question -> description }}
        </p>

        <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary btn-sm"> View Details</a>
    </div>
    @endforeach
        <div class="text-center">
        {{ $questions -> links('vendor/pagination/bootstrap-4') }}
        </div>
    </div>
@endsection
