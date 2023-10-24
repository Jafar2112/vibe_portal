@extends('admin.layout')
@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Responsive Table</h6>
            <div class="table-responsive">
                <form action="/admin/users" method="get" class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" value="{{$query}}" name="query" type="search" placeholder="Search">
                    <button class="btn">Search</button>
                </form>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Like Count</th>
                        <th scope="col">Comments Count</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->}}</td>
                            <td>
                                <button type="button" class="btn btn-success m-2">Edit</button>
                                <a href="/admin/users/{{$user->id}}"><button type="button" class="btn btn-info m-2">Info</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
