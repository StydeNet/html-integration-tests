@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Register</h1>

        {!! Alert::render() !!}

        <h3>Form Model</h3>

        {!! $form->render() !!}

        <h3>Field Builder</h3>

        {!! Form::model(new App\User, [
            'url' => '/auth/register',
            'role' => 'form',
            'method' => 'POST'
        ]) !!}

            {!! Field::text('name') !!}
            {!! Field::email('email') !!}
            {!! Field::password('password') !!}
            {{-- {!! Field::password('password_confirm', ['label' => 'Confirm your password']) !!} --}}
            {!! Field::password('password_confirm')->label('Confirm your password') !!}
            {{--!! Field::radios('gender', null, 'm', ['inline' => true]) !!--}}
            {!! Field::radios('gender')->value('m')->inline() !!}
            {!! Field::select('profession_id') !!}
            {{--!! Field::checkboxes('interests', null, null, ['inline' => true]) !!--}}
            {!! Field::checkboxes('interests')->inline() !!}

            <button type="submit" class="btn btn-primary">
                @lang('auth.register_action')
            </button>

        {!! Form::close() !!}

    </div>
</div>
@endsection