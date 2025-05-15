@extends('layout.app')

@section('title','Login page')


@section('root')
    
<div class="container my-5">

    <x-alerts.error />
    <x-alerts.success />

<form method="POST" action="{{route('handel.signup')}}">
    @csrf

    <div class="mb-3">
    <label for="inputName" class="form-label">Fullname</label>
    <input type="text" name="fullname" class="form-control" id="inputName" aria-describedby="emailHelp">

    @error('fullname')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

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
</div>

@endsection
