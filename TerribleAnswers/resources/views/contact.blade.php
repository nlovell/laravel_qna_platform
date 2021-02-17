@extends('template')

@section('content')
    <div class="container">
        <form action="{{route('contact')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control"/>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control"/>
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control"/>
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea rows="5" name="message" class="form-control"></textarea>
            </div>

            <input type="submit" class="btn btn-primary">Submit</input>

        </form>
    </div>
@endsection
