@extends('layout')
@section('content')
    <style>
        a{
            text-decoration: none;
            border: 1px aqua solid;
            border-radius: 10px;
            margin: 10px;
            padding: 10px;

        }
    </style>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <div class="row">
                        <div class="col-8">
                            <h1>Our Article</h1>
                            <p>Enjoy Reading Our Articles.</p>
                            <br>
                        </div>
                        <div class="col-4">
                            <p>Creat new Article</p>
                            <a href="/article/create/post" class="btn btn-primary btn-sm">Add Article</a>
                        </div>
                    </div>
                    @forelse($articles as $article)
                        <ul>
                            <li><a href="./article/{{$article->id}}">{{$article->title}}</a></li>
                            <br>
                        </ul>
                    @empty
                        <p class="text-warning">No blog article available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
