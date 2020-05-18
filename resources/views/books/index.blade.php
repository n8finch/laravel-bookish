@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('deleted'))
                <div class="alert alert-danger">
                    {{ session('deleted') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header d-flex justify-content-between"><span>All Books</span> <a class="btn btn-primary" href="{{ url("books/create") }}">Create</a></div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $books as $book )
                            <tr>
                                <th scope="row">{{$book->title}}</th>
                                <td>{{$book->rating}}</td>
                            <td><a class="btn btn-primary" href="{{ url("books/$book->id") }}">Details</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
