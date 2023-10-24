@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" href="/css/post/show.css">
@endsection
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container pb50">
        <div class="row">
            <div class="col-md-9 mb40">
                <article>

                    <div class="post-content">
                        @if($post->images->count()>1)
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                    @foreach($post->images as $key =>$image)
                                        @if($key==0)
                                            <div class="carousel-item active">
                                                @else
                                                    <div class="carousel-item">
                                                        @endif
                                                        <img class="d-block" src="/images/post/{{$image->image}}"
                                                             style="width: 800px; height: 400px;">
                                                    </div>
                                                    @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                               role="button"
                                               data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                               role="button"
                                               data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                </div>
                                @elseif($post->images->count()==1)
                                    <img class="d-block" src="/images/post/{{$post->images[0]->image}}"
                                         style="width: 800px; height: 400px;">
                                @endif

                                <h3>{{$post->title}}</h3>
                                <ul class="post-meta list-inline">
                                    <li class="list-inline-item">
                                        <i style="font-size: 40px;" class="fa fa-thumbs-up"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-bookmark"></i>
                                    </li>

                                    <li class="list-inline-item">
                                        <i class="fa fa-calendar-o"></i> {{$post->created_at->format('d-m-Y')}}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-tags"></i> <a href="#">Bootstrap4</a>
                                    </li>

                                </ul>
                                <p>{{nl2br(e($post->content))}}</p>
                                <ul class="list-inline share-buttons">
                                    <li class="list-inline-item">Share Post:</li>
                                    <li class="list-inline-item">
                                        <a href="#" class="social-icon-sm si-dark si-colored-facebook si-gray-round">
                                            <i class="fa fa-facebook"></i>
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="social-icon-sm si-dark si-colored-twitter si-gray-round">
                                            <i class="fa fa-twitter"></i>
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="social-icon-sm si-dark si-colored-linkedin si-gray-round">
                                            <i class="fa fa-linkedin"></i>
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <hr class="mb40">
                                <h4 style="font-size: 15px;" class="mb40 text-uppercase font500">Author</h4>

                                <img style="width: 70px;height: 70px; margin: 20px; border-radius: 50%;"
                                     src="/images/profile_photos/{{$post->user->profile_photo}}">

                                <a href="/profile/{{$post->user->id}}"><span
                                        style="font-size: 20px">{{$post->user->name}}</span></a>
                                <hr class="mb40">
                                <h4 class="mb40 text-uppercase font500">Comments</h4>
                                @foreach($post->comments()->orderBy('id','desc')->get() as $comment)
                                    <div class="media mb40">
                                        <img style="width: 50px; height: 50px; margin: 20px; border-radius: 50%;" src="/images/profile_photos/{{$post->user->profile_photo}}">
                                        <div class="media-body">
                                            <h5 class="mt-0 font400 clearfix">
                                                <a href="/profile/{{$comment->user->id}}">{{$comment->user->name}}</a>
                                                <div class="dropdown float-right">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="optionsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        ...
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="optionsDropdown">
                                                        <a class="dropdown-item" href="#" data-comment-id="{{$comment->id}}" onclick="editComment(this)">Edit</a>
                                                        <a class="dropdown-item" href="#" data-comment-id="{{$comment->id}}" onclick="deleteComment(this)">Delete</a>
                                                        <a class="dropdown-item" href="#" data-comment-id="{{$comment->id}}" onclick="reportComment(this)">Report</a>
                                                    </div>
                                                </div>
                                            </h5>
                                            {!! nl2br(e($comment->body)) !!}
                                        </div>
                                    </div>


                                @endforeach
                                <hr class="mb40">
                                <h4 class="mb40 text-uppercase font500">Post a comment</h4>
                                <form method="post" action="/comment-post/{{$post->id}}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Comment</label>


                                        <textarea name="body" class="form-control" rows="5" placeholder=""></textarea>

                                    </div>
                                    <div class="clearfix float-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </form>
                            </div>

                </article>
                <!-- post article-->

            </div>
            <div class="col-md-3 mb40">
                <!--/col-->
                <div class="mb40">
                    <h4 class="sidebar-title">Categories</h4>
                    <ul class="list-unstyled categories">
                        @foreach($categories as $category)
                            <li><a href="/vibe/{{$category->category->id}}">{{$category->category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!--/col-->
                <div>
                    <h4 class="sidebar-title">Latest News</h4>
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64"
                                 src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="#">Lorem ipsum dolor sit amet</a></h5> April 05, 2017
                            </div>
                        </li>
                        <li class="media my-4">
                            <img class="d-flex mr-3 img-fluid" width="64"
                                 src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="#">Lorem ipsum dolor sit amet</a></h5> Jan 05, 2017
                            </div>
                        </li>
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64"
                                 src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="#">Lorem ipsum dolor sit amet</a></h5> March 15, 2017
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        function editComment(element) {
            var commentId = element.getAttribute("data-comment-id");
            // Burada düzenleme işlemi için gerekli kodu ekleyin
        }

        function deleteComment(element) {
            var commentId = element.getAttribute("data-comment-id");
            // Burada silme işlemi için gerekli kodu ekleyin
        }

        function reportComment(element) {
            var commentId = element.getAttribute("data-comment-id");
            // Burada rapor işlemi için gerekli kodu ekleyin
        }

    </script>
@endsection
