@extends('admin.layout')
@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">{{$user->name}}'s Posts</h6>
            <div class="table-responsive">
                <form action="/admin/users/posts/{{$user->id}}" class="d-none d-md-flex ms-4" method="get">
                    <input class="form-control bg-dark border-0"  value="{{$query}}" name="query" type="search" placeholder="Search">
                    <button class="btn">Search</button>
                </form>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{Str::limit($post->title,30)}}</td>
                            <td>{{Str::limit($post->content,30)}}</td>
                            <td>
                                <a target="_blank" href="/post/{{$post->id}}"><button type="button" class="btn btn-info m-2">See post</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
