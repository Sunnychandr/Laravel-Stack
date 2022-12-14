@extends('layouts.main')

@section('container')
       
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</a></p>
                @if ($post->image)
                    <img src="{{ asset('storage/' .$post->image )}}" class="img-fluid" alt="{{ $post->category->name }}">
                @else
                    <img src="{{URL::asset('/img/code2.jpg')}}" class="img-fluid" alt="{{ $post->category->name }}">
                @endif
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <br><br>
                <a href="/posts" class="text-decoration-none">balikk</a>
                <br><br>
            </div>
        </div>
    </div>

        
@endsection