@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>@lang('auth.login_title')</h1>

        {!! Alert::render() !!}

        {!! Form::open(['url' => 'auth/login', 'role' => 'form', 'method' => 'POST']) !!}

            {!! Field::email('email') !!}
            {!! Field::password('password') !!}
            {!! Field::checkbox('remember_me') !!}

            <button type="submit" class="btn btn-primary">
                @lang('auth.login_action')
            </button>
            <a href="{{ url('password/email') }}">
                @lang('auth.forgot_link')
            </a>

        {!! Form::close() !!}
    </div>
</div>
@endsection