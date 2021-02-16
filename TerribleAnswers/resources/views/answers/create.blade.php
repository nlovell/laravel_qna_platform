<body>
<div class="container">
    <h2>Submit your own answer! </h2>
    <span>Want to be a smartass? How about ruin someone's day? Well, that's what the comment box dwells at the bottom of the
        internet for.</span>
    <hr/>
    <form action="{{ route('answers.store') }}" method="POST">
        {{ csrf_field() }}

        <label for="description">Answer:</label>
        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        <input type="hidden" value="{{ $question -> id }}" name="question_id"/>

        <input type="submit" class="btn btn-primary" value="Submit"/>
    </form>
</div>
