@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Book</div>
                <div class="card-body">
                <form method="POST" action="/books/{{$book->id}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value={{ $book->title}}>
                        </div>
                        <div class="form-group">
                          <label for="rating">Rating</label>
                          <select class="custom-select" id="rating" name="rating" value={{$book->rating}}>
                            <option selected>Rate book</option>
                            <option value="1" {{ (1 === $book->rating ) ? 'selected' : ''}}>1</option>
                            <option value="2" {{ (2 === $book->rating ) ? 'selected' : ''}}>2</option>
                            <option value="3" {{ (3 === $book->rating ) ? 'selected' : ''}}>3</option>
                            <option value="4" {{ (4 === $book->rating ) ? 'selected' : ''}}>4</option>
                            <option value="5" {{ (5 === $book->rating ) ? 'selected' : ''}}>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Comments:</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $book->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
