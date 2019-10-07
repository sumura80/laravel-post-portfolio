@extends('layouts.app')

@section('content')
  <h1 class="text-center my-4">新しいTaskを投稿しましょう！</h1>
  <div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card card-default">
          <div class="card-header">残りのTaskは何ですか？</div>
          <div class="card-body">
              <form action="/store-todos" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Taskタイトル">
                </div>
                <div class="form-group">
                  <textarea name="description" id="description" cols="5" rows="5" class="form-control" placeholder="Task内容"></textarea>
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-success">Taskを投稿</button>
                </div>
              </form>
          </div>
        </div>
    </div>
  </div>
@endsection   