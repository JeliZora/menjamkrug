@extends('layouts.master')

@section('content')
 <div class="col-sm-8  blog-main ">
 <h1>Registracija</h1>
 <form method="POST" action="/register">
 	{{csrf_field()}}

 	<div class="form-group">
	 	<label for='name'>Name</label>
	 	<input type="text" class="form-control" id='name' name="name" ></div>

	 <div class="form-group">
	 	<label for='email'>Email</label>
	 	<input type="text" class="form-control" id='email' name="email" >
	 	</div>

	 	<div class="form-group">
		 	<label for='password'>Password</label>
		 	<input type="password" class="form-control" id='password' name="password" >
	 	</div>

	 	<div class="form-group">
		 	<label for='password_confimation'>Password potvrdjivanje</label>
		 	<input type="password" class="form-control" id='password_confimation' name="password_confimation" >
	 	</div>
	 	<div class="form-group">
		 	<button type="submit" class="btn btn-primary">Register</button>
		 	
	 	</div>

	 	
		 	
		 	
	 	
 </form>
 </div>
 @endsection