@extends($layout)

@section('content')

    <div class="container">
        @component($rowComponent)

        @component($panelComponent)

            @slot('header', 'Form A')
            {!! Form::open(['url' => 'form-a', 'method' => 'POST'])!!}
            {!! Field::text('name', ['required' => true]) !!}
                {!! Field::text('last_name', 'Liberio', ['required', 'disabled']) !!}

            {!! Field::file('avatar') !!}
                {!! Field::textarea('description') !!}
                {!! Field::select('age',[18 => '18']) !!}
                {!! Field::radios('status', ['a' => 'Active', 'i' => 'Inactive']) !!}

                   @php $tags = [
                    'php' => 'PHP',
                    'python' => 'Python',
                    'js' => 'JS',
                    'ruby' => 'Ruby on Rails'
                    ];

                    $checked = ['php', 'js']; @endphp

                    {!! Field::checkboxes('tags', $tags, $checked) !!}

                    @component($submitGroup)
                        {!! Form::submit('Send', ['class' => $submitClasses]) !!}
                    @endcomponent

            {!! Form::close()!!}
        @endcomponent
    @endcomponent
    </div>
@endsection

