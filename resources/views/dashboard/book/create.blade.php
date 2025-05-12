@extends('dashboard.layout.app')


@section('root')

<div class="container">

    <x-alerts.error />

    <form class="my-5" enctype="multipart/form-data" method="POST" action="{{route('book.store')}}">

        @csrf

        <div class="mb-3">
          <label for="bookname" class="form-label">book title</label>
          <input type="text" class="form-control" value="{{old('bookname')}}" id="bookname" name="bookname">

          @error('bookname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="number" min="1" class="form-control" value="{{old('price')}}" id="price" name="price">

          @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="selectType" class="form-label">type</label>
            <select class="form-select" id="selectType" name="type" aria-label="Default select example">
                <option selected value="">Open this select menu</option>
                <option {{old('type') === 'story' ? 'selected':''}} value="story">story</option>
                <option {{old('type') === 'pome' ? 'selected':''}} value="pome">pome</option>
                <option {{old('type') === 'litrture' ? 'selected':''}} value="litrture">litrture</option>
              </select>

              @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{old('description')}}</textarea>

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>

@endsection
