@extends('dashboard.layout.app')


@section('root')
    <div class="container">
        <h1>{{$book->book_name}}</h1>
        <div>
            <span>{{$book->type}}</span>
             - 
            <span>{{$book->book_price}}</span>
        </div>
        <p>{{$book->description ?? 'No Description'}}</p>
    </div>

@endsection
