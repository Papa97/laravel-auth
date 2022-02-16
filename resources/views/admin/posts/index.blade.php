@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Lista post</h3>
        <div class="col-md-12">
            @foreach ($posts as $post)
            <div class="card mt-3">
                <div class="card-header">{{$post->title}}</div>
                <div class="card-body">
                    <p>
                        {{$post->content}} 
                    </p>
                    <div class="pubblished">pubblicato il: {{$post->created_at}}</div>
                    <a href="{{route("posts.show", $post->id)}}"><button type="button" class="btn btn-outline-primary">Vai al post</button></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection