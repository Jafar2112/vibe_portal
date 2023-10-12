@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" href="/css/post/create/title.css">
@endsection
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">


                <h1>Create post</h1>
                @if ($errors->any())
                    <div class="alert alert-danger w-50 mx-auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form @if($id)action="{{route('post.create.first-step',$id)}}" @else action="{{route('post.create.first-step',$id)}}"@endif method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input value="{{$temporary_post?$temporary_post->title:''}}" type="text" class="form-control" name="title"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Content</label>
                        <textarea rows="5" class="form-control" name="content">{{$temporary_post?$temporary_post->content:''}}</textarea>
                    </div>

                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            Next step
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
