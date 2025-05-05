@extends('layout.app')

@section('title','Home page')


@section('root')
    
<div class="container">
    <h1>Hello from index</h1>

    <p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus itaque soluta doloremque libero nihil amet optio illo quas, rem sunt, molestiae sed quia? Accusantium, neque veritatis ad laboriosam vero alias.</p>

    <ul>
        @foreach (['item 1','item 2','item 3','item 4'] as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>

    @if(false)
    
        <h2>image caption</h2>
    
    @else

    <h2>image else caption</h2>

    @endif

    <img src="{{asset('images/news.jpg')}}" alt="breaking new" title="news iamge">

</div>

@endsection