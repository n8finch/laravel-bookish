@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{$book->title}}</div>

                <div class="card-body">
                    <p><strong>Rating: {{$book->rating}} </strong></p>
                    <hr/>
                    <p>Comments:</p>
                    <p>{{$book->description}}</p>
                    <hr/>
                    <a class="btn btn-primary" href="{{ url('/books')}}">All Books</a> |
                    <a class="btn btn-secondary" href="{{ url("/books/$book->id/edit")}}">Edit</a>
                    <hr/>
                    <form  method="POST" action="/books/{{$book->id}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" href="{{ url('/books')}}">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
