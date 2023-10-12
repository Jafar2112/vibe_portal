@extends('layouts.main-layout')

@section('content')
    <div class="container-sm">
        <h1 style="text-align: center">Choose vibe categories</h1>
        <h6 style="text-align: center">Are you can't find vibe category? <a href="">Create your vibe category!</a></h6>
        <form action="{{route('post.create.third-step',$id)}}" method="post">
            @csrf
            @foreach($categories as $category)
                <div class="form-check form-check-inline">
                    <input name="categories[]" class="form-check-input" type="checkbox" value="{{$category->id}}"
                           id="flexCheckDefault1">
                    <label class="form-check-label" for="flexCheckDefault1">
                        {{$category->name}}
                    </label>
                </div>
            @endforeach
            <hr>
            <a href="/create-post/second-step/{{$id}}">
                <button style="display: inline-block" type="button" class="btn btn-dark">Back</button>
            </a>
            <button type="submit" class="btn btn-success">
               Create a post
            </button>
        </form>
    </div>
@endsection

