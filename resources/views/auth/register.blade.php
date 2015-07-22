@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::model(new App\User(), [
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

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection