@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>@lang('auth.login_title')</h1>

        {!! Alert::render() !!}

        {!! $form->render() !!}
    </div>
</div>
@endsection
