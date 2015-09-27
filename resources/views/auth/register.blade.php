@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>@lang('auth.register_title')</h1>

        {!! Alert::render() !!}

        {!! Form::model(new App\User, [
            'url' => '/auth/register',
            'role' => 'form',
            'method' => 'POST'
        ]) !!}

            {!! Field::text('name') !!}
            {!! Field::email('email') !!}
            {!! Field::password('password') !!}
            {!! Field::password('password_confirm', ['label' => 'Confirm your password']) !!}
            {!! Field::radios('gender', null, 'm', ['inline' => true]) !!}
            {!! Field::select('profession_id') !!}
            {!! Field::checkboxes('interests', null, null, ['inline' => true]) !!}

            <button type="submit" class="btn btn-primary">
                @trans('auth.register_action')
            </button>

        {!! Form::close() !!}
    </div>
</div>
@endsection