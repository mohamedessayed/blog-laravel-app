@extends('dashboard.layout.app')


@section('root')
    <div class="container">
      <x-alerts.success />
      <x-alerts.error />
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
                    <th scope="col">auther</th>
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
                    <td>{{$item->auther?->auther_name ?? 'N/A'}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->book_price}}</td>
                    <td>
                      <form class="d-inline" method="post" action="{{route('book.delete',$item->id)}}">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      <a href="{{route('book.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                      <a href="{{route('book.view',$item->id)}}" class="btn btn-info">View</a>
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