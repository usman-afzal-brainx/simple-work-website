@extends('simplelayout')

@section ('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			@forelse ($articles as $article)
			<div class="title">
				<h2><a href="articles/{{$article->id}}">{{$article->title}}</a></h2>
				<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
				{{$article->body}}
			</div>
			@empty
			<p>No relevant articles yet.</p>
			@endforelse
		</div>
	</div>
	@endsection