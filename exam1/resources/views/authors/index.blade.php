@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="mb-5">List of all authors</h3>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>

        </tr>
    </thead>
    </tbody>
        @foreach ($authors as $author)
        <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->firstname}}</td>
            <td>{{$author->lastname}}</td>


        </tr>
        @endforeach
    </tbody>    
</table>

@endsection('content')