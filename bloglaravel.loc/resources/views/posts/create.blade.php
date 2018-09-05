@extends('layouts.layout')

@section('content')
    <h2>Publish a post:</h2>

    <form action="/bloglaraveldone.loc/post" method="post" >

        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title"  id="title">
        </div>

        <div class="form-group">
            <label for="alias">Alias:</label>
            <input class="form-control" type="text" name="alias"  id="alias">
        </div>

        <div class="form-group">
            <label for="intro">Intro:</label>
            <textarea class="form-control" type="text" name="intro"  id="intro"></textarea>
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" type="text" name="body" id="body"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Post</button>
        </div>

       @include('layouts.error')

    </form>


@endsection

