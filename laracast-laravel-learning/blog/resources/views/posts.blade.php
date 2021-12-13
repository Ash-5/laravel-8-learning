@extends('layout')

    @section('content')

        @foreach($posts as $post)

        <article>
            <h1><a href="/post/{{$post->slug}}">{{$post->title}}</a></h1>
            <h5> {{$post->published_at}} </h5>
            <p>{!!$post->body!!}</p>

            <p>
                By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> IN   <a href="categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
            </p>
        </article>
        @endforeach

    @endsection
