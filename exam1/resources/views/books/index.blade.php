@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="mb-5">List of all books</h3>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Book Title</th>
            <th>Description</th>
            <th>Genre</th>
            <th>Author Name</th>
        </tr>
    </thead>
    </tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->genre}}</td>
            <td>{{$book->author->lastname }}&nbsp;{{ $book->author->firstname }}</td>

        </tr>
        @endforeach
    </tbody>    
</table>

@endsection('content')