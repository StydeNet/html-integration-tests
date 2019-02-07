@extends($layout)

@section('content')
    <div class="container">
        @component($rowComponent)
                <h1 class="title">Alerts</h1>

                {!! Alert::render() !!}
        @endcomponent
    </div>
@endsection