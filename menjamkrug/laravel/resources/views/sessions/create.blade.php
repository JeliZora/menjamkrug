@extends('layouts.master')

@section('content')
 <div class="col-sm-8 blog-main">
 
 	<h1>Postavite novi post</h1>
		<form method="POST" action="{{ action('SessionsController@store') }}">
			{{csrf_field()}}
			
				<h1>Logovanje</h1>

				<div class="form-group">
					<label for='email'>Email</label>
					<input type="text" class="form-control" id='email' name="email" >
				</div>

				<div class="form-group">
					<label for='password'>Password</label>
					<input type="password" class="form-control" id='password' name="password" >
				</div>
				
			
			@include('layouts.errors')
			<div class="form-group">
					<button type="submit" class="btn btn-primary">Uloguj se</button>
					
			</div>
				
		</form>{{csrf_field()}}
</div>
@endsection