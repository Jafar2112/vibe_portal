@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" href="/css/post/create/title.css">

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create vibe category</h1>
                @include('includes.error-validations')

                <form @if($id)action="{{route('vibe.category.create.first.step.post',$id)}}" @else action="{{route('vibe.category.create.first.step.post')}}" @endif method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Name <span class="require">*</span></label>
                        <input value="{{$temporary_category?$temporary_category->name:old('name')}}" type="text"
                               class="form-control" name="name"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Description <span class="require">*</span></label>
                        <textarea rows="5" class="form-control"
                                  name="description">{{$temporary_category?$temporary_category->description:old('description')}}</textarea>
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
