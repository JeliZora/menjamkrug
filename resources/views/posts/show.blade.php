@extends('layouts.master')

@section('content')
	<div class="col-sm-8 blog-main">
		
			<p id="naslov">Naslov posta:</p>
			<h2>{{$post->title}}</h2> 
			<p>by {{$post->user->name}} on {{$post->created_at->diffForHumans()}}</p>
			<p id="naslov">Sadrzaj posta:</p>
			<p>{!!$post->body!!}</p>
			
			<hr>
			<p>Kategorija:{{$post->category['name'] }}</p>
			<hr>
			<div class="tags">
				@foreach($post->tags as $tag)
					<span class="label label-default">{{$tag->name}}</span>
				@endforeach
			</div>
			<hr>
			@if (!($post->slika==null) )
			 <img src="{{ asset('uploads/'.$post->slika)}}"class="img-rounded img-responsive"  >
			@endif

			<hr>
			@foreach ($post->comments as $comment)
								<li class="list-group-item">
								<strong>{{$comment->created_at->diffForHumans()}}:&nbsp; by &nbsp;{{$comment->user->name}} </strong>
								{{$comment->body}}
							@endforeach
			
			<div class="comments">
					<ul class="list-group">
							@foreach ($post->comments as $comment)
								<li class="list-group-item">
								<strong>{{$comment->created_at->diffForHumans()}}:&nbsp; by &nbsp;{{$comment->user->name}} </strong>
								{{$comment->body}}
							@endforeach
					</ul>
			</div>
			{{-- dodavanje komentara --}}
			<hr>
			@if(Auth::check())
              	<div class="card">
		<div class="card-block">
			<form method="POST" action="/posts/{{$post->id}}/comments">
			{{csrf_field()}} 
				<div class="form-group">
					<textarea name="body" placeholder="Vas komentar ovde kucajte" class="form-control"></textarea>	
				</div>
				<div class="form-group">
					<button type="sumite" class="btn btn-primary">Dodaj</button> 
				</div>
			</form>

@include('layouts.errors')
		</div>
	</div>
               @endif


	</div>
@endsection