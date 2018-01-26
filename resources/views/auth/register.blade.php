@extends($layout)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @component($panelComponent)
                @slot('header', 'Sign up')
                {{ Form::open(['url' => 'register', 'method' => 'POST']) }}
                    {{ csrf_field() }}

                    {!! Field::text('name', ['required']) !!}

                    {!! Field::email('email', ['label' => 'E-Mail Address']) !!}

                    {!! Field::password('password') !!}

                    {!! Field::password('password', ['label' => 'Confirm Password']) !!}

                    {!! Field::radios('status', ['a' => 'Active', 'i' => 'Inactive']) !!}

                    {!! Field::checkbox('terms', 'Acepto los terminos y condiciones de uso') !!}

                    <br>

                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                {{ Form::close() }}
            @endcomponent
        </div>
    </div>
</div>
@endsection
