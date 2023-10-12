@extends('layouts.main-layout')
@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="container-sm">
        <h1 style="text-align: center;">Add photos</h1>
        <p style="text-align: center">You can add max 15 photos</p>
        @if ($errors->any())
            <div class="alert alert-danger w-50 mx-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="upload-image" method="post" action="{{route('vibe.category.create.second.step.post',['id'=>$id])}}"
              enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" class="form-control" id="customFile"/>
            @if($images->count()>0)
                @foreach($images as $image)
                    <img style="width: 100px; height:100px;" src="/images/temporary_images/{{$image->image}}">
                    <svg style="color: red;cursor: pointer" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="currentColor" class="bi bi-x delete-button" data-data-id="{{$image->id}}"
                         viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                @endforeach
            @endif
            <hr>
            <div class="form-group">
                <a href="/create-vibe-category/first-step/{{$id}}">
                    <button style="display: inline-block" type="button" class="btn btn-dark">Back</button>
                </a>

                <a href="">
                    <button form="upload-image" type="submit" class="btn btn-primary">
                        Add photo
                    </button>
                </a>

                <a href="/create-vibe-category/third-step/{{$id}}">
                    <button type="button" class="btn btn-success">
                        Next step
                    </button>
                </a>

            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $('.delete-button').on('click', function () {
                var dataId = $(this).data('data-id');


                $.ajax({
                    type: 'DELETE',
                    url: '/temporary-image/' + dataId+'vibe_category',
                    data: {
                        _token: csrfToken
                    },
                    success: function () {
                        window.location.reload();
                        $(this).parent().remove();
                    },
                    error: function (error) {
                        console.log('Delete error: ' + JSON.stringify(error));
                    }
                });

            });
        });

    </script>

@endsection
