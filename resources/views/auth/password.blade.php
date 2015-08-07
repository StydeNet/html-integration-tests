@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>@trans('auth.reminder_title')</h1>

        {!! Alert::render() !!}

        {!! Form::open(['url' => 'password/email', 'role' => 'form', 'method' => 'POST']) !!}

            {!! Field::email('email') !!}

            <button type="submit" class="btn btn-primary">
                @trans('auth.reminder_action')
            </button>

        {!! Form::close() !!}
    </div>
</div>
@endsection