@extends('layouts.master')

@section('title', "| Kategorije")

@section('content')
     <div class="row ">
		<div class="col-sm-8 ">
		<h1>Kategorije</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Ime</th>
					</tr>
				</thead>
				
				<tbody>
				@foreach($categories as $category)
				
		
					<tr>
						<th>{{$category->id}}</th>
						<td>{{$category->name}}</td>
					</tr>
						@endforeach
				</tbody>
			</table>
		
		 </div><!-- /.blog-main -->
		 
		 <div class="col-md-3 ">
			<div class="well"{!! Form::open(array('route' => 'posts','data-parsley-validate'=>'', 'files'=>true)) !!}
			{!! Form::open(array('route'=>'categories.store','method'=>'POST'))!!}
		    <h2>Nova kategorija</h2>
			{{ Form::label('name'), 'Ime'}}
			{{ Form::text('name',null,['class'=>'form-control'])}}
			{{ Form::submit('Napravi novu kategoriju',['class'=>'btn btn-primary tn-block'])}}
			{!! Form::close()!!}
		  </div><!-- /col-md-3  -->
    </div><!-- /row -->
@endsection