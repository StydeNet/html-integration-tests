@extends($layout)

@section('content')
    <div class="container">
        @component($rowComponent)
            @component($panelComponent)
                @slot('header', 'Login')

                {!! Form::open(['url' => 'login', 'role' => 'form', 'method' => 'POST']) !!}

                    {!! Field::email('email', ['label' => __('E-Mail Address')]) !!}

                    {!! Field::password('password') !!}

                    {!! Field::checkbox('remember', 1, ['label' => __('Remember Me')]) !!}

                    @component($submitGroup)
                        {!! Form::submit(__('Login'), ['class' => $submitClasses]) !!}

                        @if (Route::has('password.request'))
                            {{ link_to_route('password.request', __('Forgot Your Password?'), [], ['class'=> $linkClasses]) }}
                        @endif
                    @endcomponent
                {{ Form::close() }}
            @endcomponent
        @endcomponent
    </div>
@endsection
