@extends('clients.layout')

@section('content')

<a class="btn btn-primary" href="{{ route('pages.create') }}">Add Clients</a>

<br><br>

<table class="table table-hover">

    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach ($clients as $client)
        <tr>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>
                <a href="{{ route('clients.edit', $client) }}" class="btn btn-info">Edit</a></td>
            <td>
                {!! Form::model($client, ['route' => ['clients.delete', $client], 'method' => 'DELETE']) !!}
                 <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
<br>

{{ $clients->links() }}

<br><br>
@endsection
