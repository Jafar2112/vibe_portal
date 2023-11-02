@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/user/home.css">
@endsection
@section('content')

    <div class="container bootstrap snippets bootdey">
        <di class="col-md-8">
            <div class="col-sm-12">
                @foreach($posts   as $post)
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left image">
                                <img src="/images/profile_photos/{{$post->user->profile_photo}}"
                                     class="img-circle avatar"
                                     alt="user profile image">
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <a href="/profile/{{$post->user->id}}"><b>{{$post->user->name}}</b></a>
                                    uploaded a post.
                                </div>
                                <h6 class="text-muted time">{{$post->created_at->format('d-m-Y')}}</h6>
                            </div>
                        </div>
                        <div class="post-image">
                            @if(!$post->images->isEmpty())
                                <a href="/post/{{$post->id}}">
                                    <img style="max-height: 500px" src="/images/post/{{$post->images[0]->image}}"
                                         class="image"
                                         alt="image post">
                                </a>
                            @endif
                        </div>
                        <div class="post-description">
                            <h4><a style="color: black" href="/post/{{$post->id}}">{!! Str::limit($post->title,75) !!}</a>
                            </h4>
                            <p>
                                {!! nl2br(e(Str::limit($post->content,400))) !!}
                                @if(strlen($post->content)>=400)
                                    <a href="/post/{{$post->id}}">Read more</a>
                                @endif
                            </p>
                            <div class="stats">
                                @foreach($post->category->take(30) as $category)
                                    <a href="/vibe/{{$category->id}}"><span
                                            class="badge badge-dark">{{$category->name}}</span></a>

                                @endforeach
                                @if($post->category->count()>=2)
                                    <span style="font-size: 14px">And more</span>
                                @endif
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </di>
    </div>
@endsection
