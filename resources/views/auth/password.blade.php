@extends($layout)

@section('content')
    <div class="container">
        @component($rowComponent)
            @component($panelComponent)
                @slot('header', __('Reset Password'))

        {!! Alert::render() !!}

        {!! Form::open(['url' => 'password/email', 'role' => 'form', 'method' => 'POST']) !!}

            {!! Field::email('email') !!}

            @component($submitGroup)
                {!! Form::submit(__('Send Password Reset Link'), ['class' => $submitClasses]) !!}
            @endcomponent

        {!! Form::close() !!}
    </div>
</div>
@endsection