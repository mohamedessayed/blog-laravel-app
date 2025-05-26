@extends('layout.app')

@section('title','Login page')


@section('root')
    
<div class="container my-5">

    <x-alerts.error />

<form method="POST" action="{{route('handel.login')}}">
    @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="my-3">
  <a href="{{route('github.login')}}" class="btn btn-dark">Login with github</a>
</div>
</div>

@endsection
