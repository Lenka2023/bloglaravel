@extends('layouts.layout')

@section('content')
    <div class="row">
        @foreach($posts as $post)

                <div class="col-md-4">
                     <h2>{{ $post->title }}</h2>
                    <p>{{ $post->intro }}</p>
                   <p><a href="posts/{{ $post->id}}" class="btn btn-default">Читать далее</a> </p>
                   <p><a href="/bloglaraveldone.loc/posts/{{$post->id}}/edit" class="btn btn-primary">Редактировать</a> </p>
                    <form action="/bloglaraveldone.loc/posts/{{$post->id}}" method="post">
                        {{csrf_field()}}
                        {!! method_field('delete') !!}
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>

                </div>

        @endforeach
    </div>

@endsection
