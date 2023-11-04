
{{--@extends('layouts.main-layout')--}}
{{--@section('head')--}}
{{--    <link rel="stylesheet" href="/css/post/show.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">--}}

{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"/>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--    <style>--}}
{{--        body {--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--        }--}}

{{--        /* .container{--}}
{{--            width:90%--}}
{{--            margin:10px auto;--}}
{{--        } */--}}
{{--        .portfolio-menu {--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        .portfolio-menu ul li {--}}
{{--            display: inline-block;--}}
{{--            margin: 0;--}}
{{--            list-style: none;--}}
{{--            padding: 10px 15px;--}}
{{--            cursor: pointer;--}}
{{--            -webkit-transition: all 05s ease;--}}
{{--            -moz-transition: all 05s ease;--}}
{{--            -ms-transition: all 05s ease;--}}
{{--            -o-transition: all 05s ease;--}}
{{--            transition: all .5s ease;--}}
{{--        }--}}

{{--        .portfolio-item {--}}
{{--            /*width:100%;*/--}}
{{--        }--}}

{{--        .portfolio-item .item {--}}
{{--            /*width:303px;*/--}}
{{--            float: left;--}}
{{--            margin-bottom: 10px;--}}
{{--        }--}}
{{--        #likeButton {--}}
{{--            background-color: #1877F2;--}}
{{--            color: #fff;--}}
{{--            padding: 10px 20px;--}}
{{--            border: none;--}}
{{--            cursor: pointer;--}}
{{--        }--}}
{{--        #bookmark{--}}
{{--            background-color: #1877F2;--}}
{{--            color: #fff;--}}
{{--            padding: 10px 20px;--}}
{{--            border: none;--}}
{{--            cursor: pointer;--}}
{{--        }--}}

{{--        #likeCount {--}}
{{--            font-size: 18px;--}}
{{--            margin-top: 10px;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">--}}

{{--    <div class="container pb50">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-9 mb40">--}}
{{--                <article>--}}

{{--                    <div class="post-content">--}}
{{--                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}


{{--                            <h3>{{$post->title}}</h3>--}}
{{--                            <hr>--}}
{{--                            @if($post->images->count()>1)--}}
{{--                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--                                    <div class="carousel-inner">--}}
{{--                                        @foreach($post->images as $key => $image)--}}
{{--                                            <div @if($key==1) class= "carousel-item active" @else class= "carousel-item"@endif>--}}
{{--                                                <img style="max-width: 900px; height: 420px" class="d-block w-100" src="/images/post/{{$image->image}}" alt="First slide">--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                        <span class="sr-only">Previous</span>--}}
{{--                                    </a>--}}
{{--                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                        <span class="sr-only">Next</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                            <hr>--}}
{{--                            <p>{!! nl2br(e($post->content))!!}</p>--}}
{{--                            <ul class="list-inline share-buttons">--}}
{{--                                <li class="list-inline-item">Date: <i--}}
{{--                                        class="fa fa-calendar-o"></i> {{$post->created_at->format('d-m-Y')}}</li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="social-icon-sm si-dark si-colored-facebook si-gray-round">--}}
{{--                                        <i class="fa fa-facebook"></i>--}}
{{--                                        <i class="fa fa-facebook"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="social-icon-sm si-dark si-colored-twitter si-gray-round">--}}
{{--                                        <i class="fa fa-twitter"></i>--}}
{{--                                        <i class="fa fa-twitter"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="social-icon-sm si-dark si-colored-linkedin si-gray-round">--}}
{{--                                        <i class="fa fa-linkedin"></i>--}}
{{--                                        <i class="fa fa-linkedin"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}

{{--                                Gallery Start--}}
{{--                            <div class="container">--}}
{{--                                <h4 style="text-align: center">Gallery</h4>--}}
{{--                                <div class="portfolio-item row">--}}
{{--                                    @foreach($post->images as $key=>$image)--}}
{{--                                        <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">--}}
{{--                                            <a href="/images/post/{{$image->image}}" class="fancylight popup-btn"--}}
{{--                                               data-fancybox-group="light">--}}
{{--                                                <img class="img-fluid" src="/images/post/{{$image->image}}" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <ul class="post-meta list-inline">--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <form style="display: inline-block" method="post" action="/like-post/{{$post->id}}">--}}
{{--                                        @csrf--}}
{{--                                        <button id="likeButton" >--}}
{{--                                            <i @if(Auth::check() and Auth::user()->likes->contains($post->id)) style="color: #2cdd9b;" @endif class="fas fa-thumbs-up"></i>--}}
{{--                                            Like {{$post->likes()->count()}}--}}
{{--                                        </button>--}}

{{--                                    </form>--}}

{{--                                    <form style="display: inline-block" method="post" action="/bookmark/{{$post->id}}">--}}
{{--                                        @csrf--}}
{{--                                        <button id="bookmark" >--}}
{{--                                            <i @if(Auth::check() and Auth::user()->bookmarks->contains($post->id)) style="color: #2cdd9b;" @endif class="fa-solid fa-bookmark"></i>--}}
{{--                                            Save--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </li>--}}


{{--                            </ul>--}}
{{--                            <hr class="mb40">--}}
{{--                            <h4 style="font-size: 15px;" class="mb40 text-uppercase font500">Author</h4>--}}

{{--                            <img style="width: 70px;height: 70px; margin: 20px; border-radius: 50%;"--}}
{{--                                 src="/images/profile_photos/{{$post->user->profile_photo}}">--}}

{{--                            <a href="/profile/{{$post->user->id}}"><span--}}
{{--                                    style="font-size: 20px">{{$post->user->name}}</span></a>--}}
{{--                            <hr class="mb40">--}}
{{--                            <h4 class="mb40 text-uppercase font500">Comments</h4>--}}
{{--                            @foreach($post->comments()->orderBy('id','desc')->get() as $comment)--}}
{{--                                <div class="media mb40">--}}
{{--                                    <img style="width: 50px; height: 50px; margin: 20px; border-radius: 50%;"--}}
{{--                                         src="/images/profile_photos/{{$post->user->profile_photo}}">--}}
{{--                                    <div class="media-body">--}}
{{--                                        <h5 class="">--}}
{{--                                            <a href="/profile/{{$comment->user->id}}">{{$comment->user->name}}</a>--}}
{{--                                            <div class="comment-items dropdown float-right">--}}
{{--                                                <button class="btn btn-secondary dropdown-toggle" type="button"--}}
{{--                                                        id="optionsDropdown" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                                                        aria-expanded="false">--}}
{{--                                                    ...--}}
{{--                                                </button>--}}
{{--                                                <div class="dropdown-menu" aria-labelledby="optionsDropdown">--}}
{{--                                                    <a class="dropdown-item" data-comment-id="{{$comment->id}}"--}}
{{--                                                       onclick="editComment(this)">Edit</a>--}}
{{--                                                    <a class="dropdown-item" href="#" data-comment-id="{{$comment->id}}"--}}
{{--                                                       onclick="deleteComment(this)">Delete</a>--}}
{{--                                                    <a class="dropdown-item" href="#" data-comment-id="{{$comment->id}}"--}}
{{--                                                       onclick="reportComment(this)">Report</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </h5>--}}
{{--                                        <p id="comment-body-{{$comment->id}}">{!! nl2br(e($comment->body)) !!}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            @endforeach--}}
{{--                            <hr class="mb40">--}}
{{--                            <h4 class="mb40 text-uppercase font500">Post a comment</h4>--}}
{{--                            <form method="post" action="/comment-post/{{$post->id}}">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Comment</label>--}}


{{--                                    <textarea name="body" class="form-control" rows="5" placeholder=""></textarea>--}}

{{--                                </div>--}}
{{--                                <div class="clearfix float-right">--}}
{{--                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                </article>--}}
{{--                <!-- post article-->--}}

{{--            </div>--}}
{{--            <div class="col-md-3 mb40">--}}
{{--                <!--/col-->--}}
{{--                <div class="mb40">--}}
{{--                    <h4 class="sidebar-title">Categories</h4>--}}
{{--                    <ul class="list-unstyled categories">--}}
{{--                        @foreach($categories as $category)--}}
{{--                            <a href="/vibe/{{$category->category->id}}"> <span--}}
{{--                                    class="badge badge-dark">{{$category->category->name}}</span></a>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!--/col-->--}}
{{--                <div>--}}
{{--                    <h4 class="sidebar-title">Latest Posts</h4>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        @foreach($other_posts as $post)--}}
{{--                            <hr>--}}
{{--                            <li class="media">--}}
{{--                                    <img class="d-flex mr-3 img-fluid" width="64"--}}
{{--                                         src="/images/post/{{$post->images[0]->image}}"--}}
{{--                                         alt="Generic placeholder image">--}}
{{--                                <div class="media-body">--}}
{{--                                    <h5 class="mt-0 mb-1"><a href="/post/{{$post->id}}">{{nl2br(e(Str::limit($post->title,70)))}}</a></h5> {{$post->created_at->format('d-M-Y')}}--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}

{{--    <script>--}}
{{--        // $('.portfolio-item').isotope({--}}
{{--        //  	itemSelector: '.item',--}}
{{--        //  	layoutMode: 'fitRows'--}}
{{--        //  });--}}

{{--        $(document).ready(function () {--}}
{{--            $("likeButton").submit(function (e) {--}}
{{--                e.preventDefault();--}}
{{--                var form = $(this);--}}

{{--                $.ajax({--}}
{{--                    url: form.attr("action"),--}}
{{--                    method: "POST",--}}
{{--                    data: form.serialize(),--}}
{{--                    success: function (response) {--}}

{{--                        console.log("AJAX request successful");--}}
{{--                        console.log(response);--}}
{{--                    },--}}
{{--                    error: function (error) {--}}

{{--                        console.log("AJAX request failed");--}}
{{--                        console.log(error);--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}


{{--        $('.portfolio-menu ul li').click(function () {--}}
{{--            $('.portfolio-menu ul li').removeClass('active');--}}
{{--            $(this).addClass('active');--}}

{{--            var selector = $(this).attr('data-filter');--}}
{{--            $('.portfolio-item').isotope({--}}
{{--                filter: selector--}}
{{--            });--}}
{{--            return false;--}}
{{--        });--}}
{{--        $(document).ready(function () {--}}
{{--            var popup_btn = $('.popup-btn');--}}
{{--            popup_btn.magnificPopup({--}}
{{--                type: 'image',--}}
{{--                gallery: {--}}
{{--                    enabled: true--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--    <script>--}}
{{--        function editComment(element) {--}}
{{--            // Yorum ID'sini alın--}}
{{--            var commentId = element.getAttribute("data-comment-id");--}}

{{--            // Yorumun içeriğini alın--}}
{{--            var commentBody = document.getElementById("comment-body-" + commentId).innerHTML;--}}

{{--            // Yorumun içeriğini bir textarea ile değiştirin--}}
{{--            var textarea = document.createElement("textarea");--}}
{{--            textarea.value = commentBody;--}}
{{--            textarea.id = "comment-textarea-" + commentId;--}}

{{--            // Eski yorumu saklayın ve textarea'yı yerine ekleyin--}}
{{--            var commentElement = document.getElementById("comment-body-" + commentId);--}}
{{--            commentElement.style.display = "none";--}}
{{--            commentElement.insertAdjacentElement('afterend', textarea);--}}

{{--            // Düzenleme işlemi için "Save" ve "Cancel" düğmeleri ekleyin--}}
{{--            var saveButton = document.createElement("button");--}}
{{--            saveButton.innerHTML = "Save";--}}
{{--            saveButton.setAttribute("data-comment-id", commentId);--}}
{{--            saveButton.addEventListener("click", saveComment);--}}
{{--            var cancelButton = document.createElement("button");--}}
{{--            cancelButton.innerHTML = "Cancel";--}}
{{--            cancelButton.setAttribute("data-comment-id", commentId);--}}
{{--            cancelButton.addEventListener("click", cancelEditComment);--}}

{{--            // "Edit" düğmesini devre dışı bırakın--}}
{{--            element.style.display = "none";--}}

{{--            // "Save" ve "Cancel" düğmelerini ekleyin--}}
{{--            commentElement.insertAdjacentElement('afterend', saveButton);--}}
{{--            commentElement.insertAdjacentElement('afterend', cancelButton);--}}
{{--        }--}}

{{--        function saveComment() {--}}
{{--            // Yorum ID'sini alın--}}
{{--            var commentId = this.getAttribute("data-comment-id");--}}

{{--            // Yorumun içeriğini textarea'dan alın--}}
{{--            var editedComment = document.getElementById("comment-textarea-" + commentId).value;--}}

{{--            // Sunucuya güncellenmiş yorumu gönderin (AJAX kullanabilirsiniz)--}}

{{--            // Yorumun içeriğini güncelleyin--}}
{{--            document.getElementById("comment-body-" + commentId).innerHTML = editedComment;--}}

{{--            // Yorumun içeriğini gösterin, textarea ve "Save"/"Cancel" düğmelerini kaldırın--}}
{{--            document.getElementById("comment-body-" + commentId).style.display = "block";--}}
{{--            document.getElementById("comment-textarea-" + commentId).remove();--}}
{{--            this.remove();--}}

{{--            // "Edit" düğmesini tekrar etkinleştirin--}}
{{--            document.querySelector("[data-comment-id='" + commentId + "'][onclick='editComment(this)']").style.display = "inline-block";--}}
{{--        }--}}

{{--        function cancelEditComment() {--}}
{{--            // Yorum ID'sini alın--}}
{{--            var commentId = this.getAttribute("data-comment-id");--}}

{{--            // Yorumun içeriğini gösterin, textarea ve "Save"/"Cancel" düğmelerini kaldırın--}}
{{--            document.getElementById("comment-body-" + commentId).style.display = "block";--}}
{{--            document.getElementById("comment-textarea-" + commentId).remove();--}}
{{--            this.remove();--}}

{{--            // "Edit" düğmesini tekrar etkinleştirin--}}
{{--            document.querySelector("[data-comment-id='" + commentId + "'][onclick='editComment(this)']").style.display = "inline-block";--}}
{{--        }--}}


{{--    </script>--}}
{{--@endsection--}}
