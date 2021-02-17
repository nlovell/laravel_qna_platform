@extends('template')

@section('content')
    <body>
    <div class="container">
        <h1>Ask a Questions</h1>
        <hr/>
        <form action="{{ route('questions.update'), $question->id }}" method="POST">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">


            <label for="title">Question:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$question->title}}"/>

            <label for="description">More Information:</label>
            <textarea class="form-control" name="description" id="description"
                      rows="4">{{$question->description}}</textarea>

            <input type="submit" class="btn btn-primary" value="Update Question"/>
        </form>
    </div>
@endsection
