@extends('layouts.layout')

@section('content')
    <h2>Edit a post:</h2>

    <form action="/bloglaraveldone.loc/posts/{{$post->id}}" method="post">

        {{csrf_field()}}
        {!! method_field('patch') !!}


        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="alias">Alias:</label>
            <input class="form-control" type="text" name="alias" id="alias" value="{{$post->alias}}">
        </div>

        <div class="form-group">
            <label for="intro">Intro:</label>
            <textarea class="form-control" type="text" name="intro" id="intro" >{{$post->intro}}</textarea>
        </div>

        <div class="form-group">
            <label for="intro">Body:</label>
            <textarea class="form-control" type="text" name="body" id="body">{{$post->body}}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>

        @include('layouts.error')

    </form>


@endsection
