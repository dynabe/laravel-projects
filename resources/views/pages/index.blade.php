@extends('layout')

@section('content')

<a class="btn btn-primary" href="{{ route('pages.create') }}">Add Website</a>


    <table class="table table-hover">

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @foreach ($pages as $page)
            <tr>
                <td>{{$page->id}}</td>
                <td>{{$page->title}}</td>
                <td>
                <a href="{{ route('pages.edit', $page) }}" class="btn btn-info">Edit</a>
                </td>
                <td>
                    {!! Form::model($page, ['route' => ['pages.delete', $page], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
                
            </tr>
        @endforeach

            


    </table>
    {{$pages->links()}}
    

        
        

    

@endsection