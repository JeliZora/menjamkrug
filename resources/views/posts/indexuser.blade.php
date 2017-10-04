@extends('layouts.master')



@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Vasi postovi</h1>
		</div>

				
		<div class="col-md-4">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Napravi nov post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Kreator</th>
					<th>Naslov</th>
					<th>Sadrzaj</th>
					<th>Objavljen</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($posts as $post)
						 @if ( Auth::user()->name==$post->user->name)
									
								 
						<tr>					
							<th>{{ $post->id }}</th>
							<th>{{ $post->user->name }}</th>
							<td>{{ $post->title }}</td>
							<td>{!! substr($post->body, 0, 50) !!}{!! strlen($post->body) > 50 ? "..." : "" !!}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('postovi.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>
						@endif
					@endforeach

				</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>

@stop