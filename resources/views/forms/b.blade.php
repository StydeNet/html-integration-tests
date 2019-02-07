@extends($layout)

@section('content')
    <div class="container">

    @component($rowComponent)

        @component($errorsComponent)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endcomponent

        @component($panelComponent)

            @slot('header', 'Form B')

            {!! Form::open(['url'=>'form-b','method'=>'POST'])!!}

                    {!! Field::text('name', null, ['required', 'class'=>'input']) !!}

                    {!! Field::text('lastname','Liberio', ['label' => 'Last Name', 'required', 'disabled','class'=>'input']) !!}

                    {!! Field::radios('status_inline', ['a' => 'Active', 'i' => 'Inactive'], null, ['inline']) !!}

                    {!! Field::radios('status', ['a' => 'Active', 'i' => 'Inactive']) !!}

                    @component($submitGroup)
                        {!! Form::submit('Send', ['class' => $submitClasses]) !!}
                    @endcomponent

            {!! Form::close()!!}
        @endcomponent
    @endcomponent
    </div>
@endsection
