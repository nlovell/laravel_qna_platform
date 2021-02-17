@if ($question->answers->count() < 1)
    <h3> There are no answers for this question yet!</h3>
    <p> Why don't you start off the conversation by writing something horrific?</p>
@else
    @foreach ($question -> answers as $answer)
        <div class="panel panel-default">
            <div class="panel-body">
                <p>
                    {{ $answer -> description }} </p>

                <p style="font-size:0.6em">
                    {{$answer->user->name}} - {{$answer -> created_at->diffForHumans()}}
                </p>
            </div>
        </div>

    @endforeach
@endif
