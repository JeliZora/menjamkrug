@extends('layouts.master')
@section('title')
	<title>Edit Tag</title>
@endsection
@section('header2')
	<link href="{{ asset('css/opremazastonitenis.css') }}" rel="stylesheet">
@endsection
@section('content')
	
	{{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) }}
		
		{{ Form::label('name', "Title:") }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}

		{{ Form::submit('Sačuvaj izmene', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
	{{ Form::close() }}

@endsection