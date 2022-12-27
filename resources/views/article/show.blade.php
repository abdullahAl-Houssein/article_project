@extends('layout')
@section('content')
    <style>
        .bod{
            border: 1px blue solid;
            margin: 30px;
            padding: 30px;
            border-radius: 10px;
        }
        span{
            color: red;
        }
    </style>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/article" class="btn btn-outline-primary btn-sm">G0 Back</a>
                    <h1>{{$article_id->title}}</h1>
                    <p class="bod">{!! $article_id->body !!}</p>
                    <p>price article is :<span> {!! $article_id->price !!} $</span></p>
                    <hr>
                    <a href="/article/{{$article_id->id}}/edit" class="btn btn-outline-primary">Edit Article</a>
                    <br><br>
                    <form class="" id="delete-form" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger">Delete Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
