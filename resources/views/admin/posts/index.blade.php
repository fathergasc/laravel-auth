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
                    <th scope="col">Category</th>
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
                        <td>{{($post->category)?$post->category->name:'No category'}}</td>
                        <td>
                            <a class="btn btn-warning m-1" href="{{route('admin.posts.show', ['post' => $post->id])}}">Show</a>
                            <a class="btn btn-info m-1" href="{{route('admin.posts.edit', ['post' => $post->id])}}">Edit</a>
                            <form class="m-1 d-inline" action="{{route('admin.posts.destroy', ['post' => $post->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this entry?')">

                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete">

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
