
@extends('layout.app')

@section('root')
    <h1>test system</h1>

    <form action="{{route('send.mail')}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Send Welcome Mail</button>
    </form>
@endsection
