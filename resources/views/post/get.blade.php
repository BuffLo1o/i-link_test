@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <h1 align="left">Пользователь: id{{$post->author_id}} <br> Пост:{{$post->subject}}</h1>
                <p align="left"> Дата публикации: {{$post->date}}</p>
                <h3>{{$post->content}} <br>
                <p align="Right">{{$post->like}} <a href="{{Route('like', $post)}}"><button  >Like</button></a></p>
            </div>
        </div>
    </div>
</div>
@endsection