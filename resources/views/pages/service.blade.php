@extends('layout.app')

@section('title','Service')


@section('root')
    <h1 class="text-success">Website Service</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, beatae iste voluptatum culpa odio, modi voluptates assumenda inventore eligendi iure reiciendis. Vero, aut fuga quod harum ullam sapiente suscipit perspiciatis.</p>

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