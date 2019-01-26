@extends($layout)

@section('content')
    <div class="container">
        @component($rowComponent)
            {!! Alert::render() !!}
            @component($panelComponent)

                @slot('header', 'Dashboard')
                You are logged in!
            @endcomponent
        @endcomponent
    </div>
@endsection
