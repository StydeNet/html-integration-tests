@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Alert</h1>
                {!! Alert::render() !!}
            </div>
        </div>
    </div>
@endsection