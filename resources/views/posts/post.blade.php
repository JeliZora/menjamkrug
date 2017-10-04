         <div class="blog-post">
         
          <a href="/posts/{{$post->id}}">
            <h4 class="blog-post-title">{{$post->title}}</h4></a>
            
			<p class="blog-post-meta">
			{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}  </p>

			  <p >{!!substr($post->body,0,250)!!}{{strlen($post->body)>250 ? '...':""}}</p>
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
          </div><!-- /.blog-post -->