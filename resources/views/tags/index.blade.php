@extends('layouts.master')

@section('headerdodatak')
	<link href="{{ asset('css/opremazastonitenis.css') }}" rel="stylesheet">
@endsection

@section('content')
     <div class="row ">
		<div class="col-sm-8 ">
		<h1>Tagovi</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Ime</th>
					</tr>
				</thead>
				
				<tbody>
				@foreach($tags as $tag)
				
		
					<tr>
						<th>{{$tag->id}}</th>
						<td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
					</tr>
						@endforeach
				</tbody>
			</table>
		
		 </div><!-- /.blog-main -->
		 
		 <div class="col-md-3 ">
			<div class="well">
			{!! Form::open(array('route'=>'tags.store','method'=>'POST'))!!}
		    <h2>Novi tag</h2>
			{{ Form::label('name'), 'Ime'}}
			{{ Form::text('name',null,['class'=>'form-control'])}}
			<br>
			{{ Form::submit('Napravi novi tag',['class'=>'btn btn-primary tn-block'])}}
			{!! Form::close()!!}
		  </div><!-- /col-md-3  -->
    </div><!-- /row -->
@endsection