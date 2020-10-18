@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{Route('popular', $limit='')}}">Проверка</a> <a href="{{Route('popular', [$limit='5'])}}">Проверка 5</a></div>
        @foreach ($posts as $post)
        
        <h4 align="center"><a href="{{Route('like', $post->id)}}">id{{$post->author_id}}:{{$post->subject}}</a></h4>
        
        <h5 align="left">{{$post->content}}</h5>

        @endforeach

                <div class="card-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection