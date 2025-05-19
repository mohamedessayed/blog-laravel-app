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

        <h2>User Comments</h2>

        @foreach ($book->users as $user)
            <p>
                <strong>{{$user->name}}</strong>: {{$user->pivot->comment}}
            </p>
        @endforeach
    </div>



@endsection
