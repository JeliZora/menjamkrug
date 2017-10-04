@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
		<strong>Odlično! </strong>{{Session::get('success')}}

	</div>
@endif