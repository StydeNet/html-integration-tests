@extends($layout)

@section('content')
    <div class="container">
        @component($rowComponent)
            @component($panelComponent)
                @slot('header', __('Reset Password'))

                {!! Form::open(['url' => 'password/reset', 'role' => 'form', 'method' => 'POST']) !!}

                {!! Field::email('email') !!}

                {!! Field::password('password') !!}

                {!! Field::password('password', ['label' => 'Confirm Password']) !!}

                @component($submitGroup)
                    {!! Form::submit(__('Reset Password'), ['class' => $submitClasses]) !!}
                @endcomponent

                {!! Form::close() !!}
            @endcomponent
         @endcomponent
    </div>
@endsection
