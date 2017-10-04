         <div class="blog-post">
          <h2 class="blog-post-title">
		  
          <a href="{{ url('/posts/'.$post->id) }}">
		  
            <h2 class="blog-post-title">{{$post->title}}</h2></a>
            
			<p >{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}  </p>

            <h3>{!!substr($post->body,0,250)!!}{{strlen($post->body)>250 ? '...':""}}</h3>
			  <hr>
			<hr>
			<p>Kategorija:{{$post->category['name'] }}</p>
			<hr>
			@if (!($post->slika==null) )
			 <img src="{{ asset('uploads/avatars/'.$post->slika)}}"class="img-rounded img-responsive"  >
			@endif
          </div><!-- /.blog-post -->