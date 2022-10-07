@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('admin.posts.create')}}" class="btn btn-secondary my-1">Add Post</a>
        <div>
            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->slug}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('admin.posts.show', ['post' => $post->id])}}">Show</a>
                            <a class="btn btn-info" href="">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
