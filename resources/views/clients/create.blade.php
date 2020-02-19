@extends('clients.layout')

@section('content')

{!! Form::open(['route' => 'clients.store']) !!}

    @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div class="btn btn-danger">{{ $error }}</div>
            @endforeach

    @endif

    <div class="form-group">

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Go Back', ['class'=>'btn btn-default']) !!}

    </div>



{!! Form::close() !!}
    
@endsection