@extends('layouts.master')

@section('title','TWICE')

@section('content')
	<section id="newsboard">
		<div class="news">
			<h1 class="news-title">NEWS</h1>

			<ul class="newslist">
				<li>
					<a href="#">
						<p class="date">2020.08.09</p>
						<p class="title">8月9日（日）15:00からTWICE『Beyond LIVE – TWICE : World in A Day』ついに開催！</p>
					</a>			
				</li>

				<li>
					<a href="#">
						<p class="date">2020.08.09</p>
						<p class="title">『Beyond LIVE - TWICE : World in A Day』へのジョンヨンの出演方法について</p>
					</a>			
				</li>

				<li>
					<a href="#">
						<p class="date">2020.08.09</p>
						<p class="title">「TWICE WORLD TOUR 2019 ‘TWICELIGHTS’ IN JAPAN」（4月15日、4月16日）東京ドーム公演開催延期に伴う振替公演に関するお知らせ</p>
					</a>			
				</li>

				<li>
					<a href="#">
						<p class="date">2020.08.09</p>
						<p class="title">ONCE JAPAN 2020年6月ご継続者様、ONCEオリジナルボールペンに関するご案内</p>
					</a>			
				</li>

				<li>
					<a href="#">
						<p class="date">2020.08.09</p>
						<p class="title">TWICE ぷちチャレンジ 第2弾 開催決定！</p>
					</a>			
				</li>
			</ul>

			<a href="#">
				<p class="view-all">VIEW ALL &#10095;</p>
			</a>
		</div>
	</section>

	<section id="galleryboard">
		<div class="galleries">
			<h2 class="gallery-title">GALLERY</h2>

			<ul class="gallery-list">
				<li>
					<a href="/img/artist/nayeon.jpg">
						<img class="gallery" src="{{ asset('/img/artist/nayeon.jpg') }}">
					</a>
				</li>

				<li>
					<a href="/img/artist/sana.jpg">
						<img class="gallery" src="{{ asset('/img/artist/sana.jpg') }}">
					</a>
				</li>

				<li>
					<a href="/img/artist/mina.jpg">
						<img class="gallery" src="{{ asset('/img/artist/mina.jpg') }}">
					</a>
				</li>
			</ul>

			<a href="#">
				<p class="view-all">VIEW ALL &#10095;</p>
			</a>
		</div>
	</section>
@endsection