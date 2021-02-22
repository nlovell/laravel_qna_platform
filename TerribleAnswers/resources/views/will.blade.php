@extends('template')

@section('content')
    <div class="container" id="app">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <h1>No swearing in my good christian server</h1>
                    <div v-if="step === 1">
                        <h1>Step 1!</h1>
                    </div>
                    <div v-if="step === 2">

                        <h1>Step 2!</h1>
                    </div>
                    Hello Will

                </div>
            </div>
        </div>
    </div>
    </div>

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {step: 1}
        });
    </script>
@endsection

@endsection
