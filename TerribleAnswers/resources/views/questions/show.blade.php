@extends('template')

@section('content')
    <div class="container">
        <div id="questioncontents">
            <h1>{{ $question -> title }}</h1>

            <p class="lead">
                {{ $question -> description }}
            </p>

            <p style="font-size:0.6em">
                {{$question->user->name}} - {{$question -> created_at->diffForHumans()}}
            </p>
        </div>
        @if ($question->user->id == Auth::id())
            <a href="{{route('questions.edit', $question->id)}}" class="btn btn-primary" style="margin-top:5px;">Edit
                Question</a>
        @endif

        <hr/>

        @include('answers/show')

        <hr/>
        @include('answers/create')
    </div>
@endsection
