@extends('layouts.master')

@section('headerdodatak')
	@include('layouts.headerdodatak')	
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>	
{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!}

@endsection

@section('title', "| Postavljanje")

@section('content')
<div class="row">
    <div class="col-sm-8 blog-main">
 
		<h1>Postavite novi oglas</h1>
 
		{!! Form::open(['route' => 'posts','data-parsley-validate'=>'', 'files'=>true]) !!}
		{!! Form::label('title','Naslov posta:') !!}
		{!! Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength'=>'255','minlength'=>'5')) !!}
		  
		{!! Form::label('body','Sadržaj posta:') !!}
		{!! Form::textarea('body',null,array('class'=>'form-control','required'=>'','minlength'=>'5')) !!}
		  <script>
            CKEDITOR.replace( 'body' );
          </script>
		  
		{!! Form::label('category_id','Kategorije:') !!}
		<select class="form-control " name="category_id">
		@foreach($categories as $category)
		<option value="{{$category->id}}">{{$category->name}}</option>	
		@endforeach	
		</select>
		
		{!! Form::label('file','Izaberi sliku:') !!}
		{!! Form::file('file') !!}

		{!! Form::submit('Objavi post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;')) !!}
		{!! Form::close() !!}
		
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
	 </div>
	 @include('layouts.sidebar')
</div><!-- /.row -->
@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.full.min.js') !!}
	<script type="text/javascript">
$(".select2-multi").select2();
</script>
@endsection