@extends('layout')

    @section('content')
        <article>
            <h1>{{$post->title}}</h1>
            <h5>{{date('d-m-Y', $post->date)}}</h5>
            <p> BY <a href="/author/{{ $post->author->username }}">{{ $post->author->name }} </a> IN
                <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
            </p>
            <div>{!! $post->body !!}</div>
        </article>

        <a href="/">Go Back</a>
    @endsection


