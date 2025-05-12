@extends('dashboard.layout.app')


@section('root')
    <div class="container">
      <x-alerts.success />
      <div class="my-3">
        <a href="{{route('book.create')}}" class="btn btn-primary">Create new book</a>
      </div>
        <div class="table-responsive">
            @if (count($result) > 0)
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">type</th>
                    <th scope="col">price</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($result as $item)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->book_name}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->book_price}}</td>
                    <td>
                      <button class="btn btn-danger">Delete</button>
                      <button class="btn btn-warning">Edit</button>
                      <button class="btn btn-info">View</button>
                    </td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
            </table>
            @else
                <x-state.empty-state />
            @endif
        </div>
    </div>
@endsection