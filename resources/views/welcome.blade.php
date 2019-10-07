@extends('layouts.app')

@section('content')
<div class="jumbotron text-center mt-4" style="background:#CFF3F1">
    <h1>プログラミングTask管理サイト</h1>
    
    <p>必要なTaskを管理をしましょう。</p>
    <p class="https://sumura80.github.io/muraoka-introduction/aboutme.html"><a class="btn btn-primary mr-2" href="/todos">投稿内容を確認</a><a class="btn btn-success" href="/new-todos">Task投稿</a></p>
</div>

<div class="card-box" style="margin-bottom:150px;">
    <div class="row">
        <a href="https://readouble.com/laravel/6.0/en/" style="text-decoration:none; color:#535D5D;">
            <div class="col-md-4 mt-4">
                <div class="card" >
                <img class="card-img-top" src="{{ asset('/images/laravel_en.png') }}" alt="laravel_en" style="height:200px;">
                <div class="card-body">
                <h5 class="card-title">Laravel English</h5>
                <p class="card-text">英語での公式サイト</p>
                <a href="https://readouble.com/laravel/6.0/en/" style="text-decoration:none;" class="btn btn-primary mt-2">詳細をみる</a>
                </div><!-- end of card-body-->
            </div><!-- end of card-->
            </div><!-- end of cols -->
				</a>    
				
				<a href="http://laravel.jp/" style="text-decoration:none; color:#535D5D;">
					<div class="col-md-4 mt-4">
							<div class="card" >
							<img class="card-img-top" src="{{ asset('/images/laravel_jp.png') }}" alt="カードの画像" style="height:200px;">
							<div class="card-body">
							<h5 class="card-title">Laravel Jp</h5>
							<p class="card-text">日本語での公式サイト</p>
							<a href="http://laravel.jp/" class="btn btn-primary mt-2">詳細をみる</a>
							</div><!-- end of card-body-->
							</div><!-- end of card-->
					</div><!-- end of cols -->
				</a>
				<a href="https://qiita.com/" style="text-decoration:none; color:#535D5D;">
					<div class="col-md-4 mt-4">
							<div class="card" >
							<img class="card-img-top" src="{{ asset('/images/qiita.png') }}" alt="カードの画像" style="min-height:200px;">
							<div class="card-body">
							<h5 class="card-title">Qiita</h5>
							<p class="card-text">Qiitaの公式サイト</p>
							<a href="https://qiita.com/" class="btn btn-primary mt-2">詳細をみる</a>
							</div><!-- end of card-body-->
							</div><!-- end of card-->
					</div><!-- end of cols -->
				</a>

				<a href="https://ja.stackoverflow.com/" style="text-decoration:none; color:#535D5D;">
					<div class="col-md-4 mt-4">
							<div class="card" >
							<img class="card-img-top" src="{{ asset('/images/stackoverflow.png') }}" alt="カードの画像" style="min-height:200px;">
							<div class="card-body">
							<h5 class="card-title">stack overflow</h5>
							<p class="card-text">stack overflowの公式サイト</p>
							<a href="https://ja.stackoverflow.com/" class="btn btn-primary mt-2">詳細をみる</a>
							</div><!-- end of card-body-->
							</div><!-- end of card-->
					</div><!-- end of cols -->
				</a>
				<a href="https://sumura80.github.io/muraoka-introduction/" style="text-decoration:none; color:#535D5D;">
					<div class="col-md-4 mt-4">
							<div class="card" >
							<img class="card-img-top" src="{{ asset('/images/myportfolio.png') }}" alt="カードの画像" style="min-height:200px;">
							<div class="card-body">
							<h5 class="card-title">自分のポートフォリオ</h5>
							<p class="card-text">これまでに作成してきたポートフォリオのまとめサイト</p>
							<a href="https://sumura80.github.io/muraoka-introduction/" class="btn btn-primary mt-2">詳細をみる</a>
							</div><!-- end of card-body-->
							</div><!-- end of card-->
					</div><!-- end of cols -->
				</a>
				<a href="https://sumura80.github.io/muraoka-introduction/aboutme.html" style="text-decoration:none; color:#535D5D;">
					<div class="col-md-4 mt-4">
							<div class="card" >
							<img class="card-img-top" src="{{ asset('/images/introduction.png') }}" alt="カードの画像" style="min-height:200px;">
							<div class="card-body">
							<h5 class="card-title">自己紹介</h5>
							<p class="card-text">自己紹介サイト</p>
							<a href="https://sumura80.github.io/muraoka-introduction/aboutme.html" class="btn btn-primary mt-2">詳細をみる</a>
							</div><!-- end of card-body-->
							</div><!-- end of card-->
					</div><!-- end of cols -->
				</a>


				<a href="https://lifeabroad.jp/" style="text-decoration:none; color:#535D5D;">
					<div class="col-md-4 mt-4">
							<div class="card" >
							<img class="card-img-top" src="{{ asset('/images/lifeabroad.png') }}" alt="カードの画像" style="min-height:200px;">
							<div class="card-body">
							<h5 class="card-title">Lifeabroad</h5>
							<p class="card-text">外国人に日本の情報を提供するサイト（運営中）</p>
							<a href="https://lifeabroad.jp/" class="btn btn-primary mt-2">詳細をみる</a>
							</div><!-- end of card-body-->
							</div><!-- end of card-->
					</div><!-- end of cols -->
				</a>


				<a href="https://medplus.jp/" style="text-decoration:none; color:#535D5D;">
					<div class="col-md-4 mt-4">
							<div class="card" >
							<img class="card-img-top" src="{{ asset('/images/medplus.png') }}" alt="カードの画像" style="min-height:200px;">
							<div class="card-body">
							<h5 class="card-title">Medplus</h5>
							<p class="card-text">日本で売られているOTC医薬品の紹介とユーザー同士の情報共有サイト（運営中）</p>
							<a href="https://medplus.jp/" class="btn btn-primary mt-2">詳細をみる</a>
							</div><!-- end of card-body-->
							</div><!-- end of card-->
					</div><!-- end of cols -->
				</a>





    </div><!--end of row -->
</div><!-- end of card-box -->


@endsection