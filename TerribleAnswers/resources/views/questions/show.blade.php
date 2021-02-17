@extends('template')

@section('content')
    <div class="container">
        <h1>{{ $question -> title }}</h1>

        <p class="lead">
            {{ $question -> description }}
        </p>

        <p style="font-size:0.6em">
            {{$question->user->name}} - {{$question -> created_at->diffForHumans()}}
        </p>

        <hr/>

        @include('answers/show')

        <hr/>
        @include('answers/create')
    </div>
@endsection
