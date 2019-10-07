@extends('layouts.app')
@section('title')
Task名:{{$todo->name}}
@endsection
@section('content')
<div class="container">
        <h1 class="text-center my-5">
                {{$todo->name}}
        </h1>
        
       <div class="row justify-content-center">
           <div class="col-sm-10">
            <div class="card card-default">
                    <div class="card-header">
                        Task内容
                    </div>
                    <div class="card-body">
                        {{ $todo->description}}
                    </div>
                    
                </div>
                <a href="/todos/{{$todo->id }}/edit" class="btn btn-info btn-sm my-2">編集</a>
                <a href="/todos/{{$todo->id }}/delete" class="btn btn-danger btn-sm my-2">削除</a>
           </div>
       </div>
    </div>
    
@endsection