@extends('template')

@section('content')

    <div class="container">
        <h1>{{ $user->name }}'s profile</h1>
        <p>Bully {{$user->name}} for their public ramblings on TerribleAnswers. </p>
        <hr/>

        <div class="row">

            <div class="col-md-6">
                <h3> Terrible Questions </h3>

                @foreach($user->questions as $question)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>{{$question->title}}</h4>
                            {{$question->description}}
                        </div>

                        <div class="panel-footer">
                            <a href="{{route('questions.show', $question->id)}}" class="btn btn-link">View
                                terribleness</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-6">
                <h3> Terrible Answers </h3>
                @foreach($user->answers as $answer)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>{{$answer->terrible_question_id}}</h4>
                            {{$user->name}}'s answer: <i>{{$answer->description}}</i>
                        </div>

                        <div class="panel-footer">
                            <a href="{{route('questions.show', $answer->terrible_question_id)}}" class="btn btn-link">View
                                more terribleness</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
