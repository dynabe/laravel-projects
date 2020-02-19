@extends('clients.layout')

@section('content')
<br>
<a class="btn btn-primary" href="{{ route('shorts.create') }}">Add Link</a>
<br><br>
<table class="table table-hover">

<tr>
    <th>Link</th>
    <th>Short</th>
</tr>


@foreach ($shorts as $short)

<tr>
    <td>{{$short['link']}}<br/></td>
    <td>{{ 'http://localhost/laravel2/public/shorts/' . $short['short']}}<br/></td>
</tr>

    
    
@endforeach

</table>

@endsection