@extends($layout)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Alerts</h1>

                {!! Alert::render() !!}
            </div>
        </div>
    </div>
@endsection