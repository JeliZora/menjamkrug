@extends('layouts.master')

@section('title', '| Edit Blog Post')

@section('headerdodatak')
	@include('layouts.headerdodatak')	
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
 {!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!} 
@endsection


@section('content')

	<hr>
	<div class="row">
			@if(Auth::check() and Auth::user()->name==$post->user->name)
				Vase korisnicko ime je
			 {{Auth::user()->name }}
						
			<form method="POST" action="{{url('/posts/'.$post->id.'/update')}}" enctype="multipart/form-data">
			<div class="form-group">
			<label for="title">Naslov posta:</label>
			<textarea type="text" class="form-control input-lg" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea>
		  </div>
		  
		{!! Form::label('category_id','Kategorije1:',['class'=>'form-spacing-top']) !!}	
		{!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
					
		   <div class="form-group">
			<label for="body">Sadržaj posta:</label>
			<textarea  class="form-control"  id="body" name="body" required>{{ $post->body }}</textarea>
			 <script>
            CKEDITOR.replace( 'body' );
        </script>
       
		  </div>
		
			<p>Slika stara</p>
		  <img src="{{ url('/uploads/avatars/'.$post->slika) }}" class="img-rounded img-responsive"  >
		<br>
		 <label>Izaberi drugu sliku:</label>
				    <input type="file" name="file" id="file">
					<br>
		 <div class= "well">
					
					<hr>
					<div class="row">
					
						<div class="col-sm-6 ">
						
							<a href="{{url('/posts/'.$post->id)}}" class="btn btn-primary btn-block">Vrati me nazad</a>
						</div>
						
						<div class="col-sm-6 ">
							<button type="submit" class="btn btn-primary">Sacuvaj izmene</button>  
					    </div>
		</div>
		</form>{{csrf_field()}}
		
						</div>

		  <input type="hidden" name="_token" value="{{ Session::token() }}">
              {{ method_field('PUT') }}
            </form>﻿
	@if(count($errors))
			<div class="Form-group">
				<div class="alert alert-error">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			</div>
		@endif
			   
	@endif						
		
</div>
@stop	
@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.full.min.js') !!}
	
@endsection
				
		
       
        
		  
		  
		
					