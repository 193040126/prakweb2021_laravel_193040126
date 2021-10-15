@extends('layouts.main')

@section('container')
    {{-- <article>
        
    </article> --}}
    <h2>{{ $post->title }}</h2>
    <p>By. Diva Amwal in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {{-- <h5>{{ $post["author"] }}</h5> --}}
    {!! $post->body !!}
    <a href="/blog">Back to Posts</a>
    
@endsection