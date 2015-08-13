@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>@lang('auth.reset_title')</h1>

        {!! Alert::render() !!}

        {!! Form::open(['url' => 'password/reset', 'role' => 'form', 'method' => 'POST']) !!}

            {!! Field::email('email') !!}
            {!! Field::password('password') !!}
            {!! Field::password('password_confirmation') !!}

            <button type="submit" class="btn btn-primary">
                @trans('auth.reset_action)
            </button>

        {!! Form::close() !!}
    </div>
</div>
@endsection