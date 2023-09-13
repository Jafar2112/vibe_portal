@extends('layouts.main-layout')
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    .carousel-inner {
        max-height: 510px; /* Ayarlayacağınız maksimum yükseklik */
    }

    .carousel-inner img {
        width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        .carousel-inner {
            max-height: 250px; /* Mobildeki maksimum yükseklik */
        }
    }
</style>


@section('content')
    <main role="main">

{{--        <div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--            <ol class="carousel-indicators">--}}
{{--                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--                <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--            </ol>--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img class="first-slide"--}}
{{--                         src="/images/page/pxfuel.jpg"--}}
{{--                         alt="First slide" >--}}
{{--                    <div class="container">--}}
{{--                        <div class="carousel-caption text-left">--}}
{{--                            <h1>Example headline.</h1>--}}
{{--                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta--}}
{{--                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
{{--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="second-slide"--}}
{{--                         src="/images/page/wallpapersden.com_synthwave-and-retrowave_1200x480.jpg" >--}}
{{--                    <div class="container">--}}
{{--                        <div class="carousel-caption">--}}
{{--                            <h1>Another example headline.</h1>--}}
{{--                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta--}}
{{--                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
{{--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="third-slide"--}}
{{--                         src="https://img.freepik.com/free-photo/abstract-grunge-decorative-relief-navy-blue-stucco-wall-texture-wide-angle-rough-colored-background_1258-28311.jpg?w=1060&t=st=1692211158~exp=1692211758~hmac=85f3fa14ffc31675a4f973021bd941c6f5d6e431c1e024b2428fc6662100a596"--}}
{{--                         alt="Third slide">--}}
{{--                    <div class="container">--}}
{{--                        <div class="carousel-caption text-right">--}}
{{--                            <h1>One more for good measure.</h1>--}}
{{--                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta--}}
{{--                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
{{--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
{{--        </div>--}}


{{--        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img src="/images/page/pxfuel.jpg" alt="Slide 1">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <h3>Slide 1 Başlık</h3>--}}
{{--                        <p>Slide 1 açıklama metni buraya gelecek.</p>--}}
{{--                        <a href="#" class="btn btn-primary">Detaylar</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="/images/page/wallpapersden.com_synthwave-and-retrowave_1200x480.jpg" alt="Slide 2">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <h3>Slide 2 Başlık</h3>--}}
{{--                        <p>Slide 2 açıklama metni buraya gelecek.</p>--}}
{{--                        <a href="#" class="btn btn-primary">Detaylar</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="/image/page/wp11288307-neon-noir-wallpapers.png" alt="Slide 3">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <h3>Slide 3 Başlık</h3>--}}
{{--                        <p>Slide 3 açıklama metni buraya gelecek.</p>--}}
{{--                        <a href="#" class="btn btn-primary">Detaylar</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
{{--        </div>--}}


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/images/page/pxfuel.jpg" alt="Los Angeles">

                </div>

                <div class="item">
                    <img src="/images/page/wp11288307-neon-noir-wallpapers.png" alt="Chicago">
                </div>

                <div class="item">
                    <img src="/images/page/wallpapersden.com_synthwave-and-retrowave_1200x480.jpg" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>







        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle"
                         src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                         alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                        ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle"
                         src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                         alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                        Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo,
                        tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle"
                         src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                         alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
                        ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                         alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span
                            class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                         alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                         alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
@endsection


