@extends('layout.app')

@section('title','Blog')
 

@section('root')
    <H1>Website blog</H1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum eaque, mollitia, sapiente voluptatibus fugit quo ipsa nisi saepe nulla numquam, vel maiores cum ea rerum? Non nobis sit fugiat. Dolore.</p>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <x-site-card />
            </div>
            <div class="col-md-3">
                <x-site-card />
            </div>
            <div class="col-md-3">
                <x-site-card />
            </div>
            <div class="col-md-3">
                <x-site-card />
            </div>
        </div>
    </div>
@endsection