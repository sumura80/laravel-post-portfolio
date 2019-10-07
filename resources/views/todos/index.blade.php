@extends('layouts.app')

@section('title')
Todos List
@endsection


@section('content')
 
    <div class="container">
			<h1 class="text-center mt-4">Task一覧</h1>
				<div class="row justify-content-center">
					<div class="col-sm-8">

		 <div class="card card-default">
			<div class="card-header">
				残りのTask
			</div>
			<div class="card-body">
				<ul class="list-group">
					@foreach($todos as $todo)
						<li class="list-group-item">
							{{$todo->name}}
							@if(!$todo->completed)
								<a href='/todos/{{ $todo->id}}/complete' style="color:white;" class="btn btn-warning btn-sm float-right mr-2">完了</a>
							@endif
							<a href='/todos/{{ $todo->id}}' class="btn btn-primary btn-sm float-right mr-2">詳細をみる</a>
						</li>
					 @endforeach
				</ul>
			</div>
		</div>
					</div>
				</div>

		</div>
 @endsection