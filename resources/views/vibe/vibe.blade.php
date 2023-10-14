@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/vibe/vibe.css">
@stop
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">

                <article>

                    <h1 class="fw-bolder mb-1">{{$category->name}}</h1>
                    @if($category->images->count()>1)
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                                        <!-- slides -->
                                        <div class="carousel-inner">
                                            @foreach($category->images as $key=>$image)
                                                @if($key==0)
                                                    <div class="carousel-item active">
                                                @else()
                                                     <div class="carousel-item">
                                                @endif
                                                        <img style="width:700px;height: 400px" src="/images/vibe_category/{{$image->image}}">
                                                    </div>
                                            @endforeach
                                        </div>

                                        <!-- Left right -->
                                        <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>

                                        <!-- Thumbnails -->
                                        <ol class="carousel-indicators list-inline">
                                            @foreach($category->images as $image)
                                                <li class="list-inline-item active">
                                                    <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                                       data-target="#custCarousel">
                                                        <img style="width: 100px;height: 50px" src="/images/vibe_category/{{$image->image}}" class="img-fluid">
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($category->images->count()==1)
                        <img style="width:700px;height: 400px" src="/images/vibe_category/{{$category->images[0]->image}}">
                    @endif
                    <section class="mb-5">
                        <p>Ulpoaded by <a href="/user-profile/{{$category->user_id}}">{{$category->user->name}}</a></p>
                        <hr>
                        <p class="fs-5 mb-4">{{$category->description}}</p>

                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            <form class="mb-4"><textarea class="form-control" rows="3"
                                                         placeholder="Join the discussion and leave a comment!"></textarea>
                            </form>
                            <!-- Comment with nested comments-->
                            <div class="d-flex mb-4">
                                <!-- Parent comment-->
                                <div class="flex-shrink-0"><img class="rounded-circle"
                                                                src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
                                                                alt="..."/></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    If you're going to lead a space frontier, it has to be government; it'll never be
                                    private enterprise. Because the space frontier is dangerous, and it's expensive, and
                                    it has unquantified risks.
                                    <!-- Child comment 1-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle"
                                                                        src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
                                                                        alt="..."/></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            And under those conditions, you cannot establish a capital-market evaluation
                                            of that enterprise. You can't get investors.
                                        </div>
                                    </div>
                                    <!-- Child comment 2-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle"
                                                                        src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
                                                                        alt="..."/></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            When you put money directly to a problem, it makes a good headline.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single comment-->
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img class="rounded-circle"
                                                                src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
                                                                alt="..."/></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    When I look at the universe and all the ways the universe wants to kill us, I find
                                    it hard to reconcile that with statements of beneficence.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->

                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Related categories</div>
                    <div class="card-body">
                        <div class="row">
                            <?php $counter=1; ?>
                            @foreach($related_categories as $item)
                                @if($counter%2==0)
                                    <div class="col-sm-6">

                                        <ul class="list-unstyled mb-0">

                                                <li><a href="/vibe/{{$item->category->id}}">{{$item->category->name}}</a></li>

                                        </ul>
                                    </div>
                                @else
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="/vibe/{{$item->category->id}}">{{$item->category->name}}</a></li>
                                        </ul>
                                    </div>
                                @endif
                                <?php $counter++?>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                        use, and feature the Bootstrap 5 card component!
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
@endsection
