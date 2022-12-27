
@extends('layout')
@section('content')
    <dev class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/student" class="btn btn-outline-primary btn sm">Go Back</a>
            </div>
            <div class="border rounded mt-5 p-4">
                <h1>Create a New Article</h1>
                <p>fill and submit this form to create a Article</p>
                <hr>
                <form  action=""method="post">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title">Article title</label>
                            <input type="text" id="title" class="form-control" name="title" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="body">Article body</label>
                            <textarea id="body" class="form-control" name="body" required></textarea>
                        </div>
                        <div class="control-group col-12">
                            <label for="price">Article price</label>
                            <input  id="price" class="form-control" name="price" required></input>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Create Article
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </dev>
@endsection

