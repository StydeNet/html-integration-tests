@extends($layout)

@section('content')
    <div class="container">
        @component($rowComponent)
            @component($panelComponent)
                @slot('header', 'Sign up')
                {{ Form::open(['url' => 'register', 'method' => 'POST']) }}

                    {!! Field::text('name', ['required']) !!}

                    {!! Field::email('email', ['label' => 'E-Mail Address']) !!}

                    {!! Field::password('password') !!}

                    {!! Field::password('password', ['label' => 'Confirm Password']) !!}

                    {!! Field::radios('status', ['a' => 'Active', 'i' => 'Inactive']) !!}

                    {!! Field::checkbox('terms', 1, ['label' => 'I agree to the terms and conditions.']) !!}
                    @component($submitGroup)
                        {!! Form::submit(__('Register'), ['class' => $submitClasses]) !!}
                    @endcomponent
                {{ Form::close() }}
            @endcomponent
         @endcomponent
    </div>
@endsection

