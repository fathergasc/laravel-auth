@extends('layouts.app')


@section('content')
<div class="container">
    <h3>Title: {{$post->title}}</h3>
    <h3>Category: {{$post->category->name}}</h3>
    <p>Content: {{$post->content}}</p>
    <h5>Slug: {{$post->slug}}</h5>


    <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Back to posts list</a>
</div>

@endsection
