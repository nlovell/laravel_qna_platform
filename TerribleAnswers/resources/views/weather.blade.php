@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1> Title </h1>
                <hr/>
                <form action="{{route('weather')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" name="location" class="form-controller" placeholder="Enter Zipcode">
                    <input type="submit" class="btn btn-primary" value="get crunked">
                </form>
            </div>
        </div>
    </div>

@endsection
