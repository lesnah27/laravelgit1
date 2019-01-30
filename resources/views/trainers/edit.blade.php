@extends('layouts.app')


@section('title','edit')

	@section('content')
	<form class="form-group" method="POST" action="/trainers/{{ $trainer->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
	
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" value="{{ $trainer->name }}" class="form-control">
			
		</div>

		<div class="form-group">
			<label for="">Foto</label>
			<br>
			<input type="file" name="avatar">
			</div>
			
			<button type="submit" class="btn btn-primary">Actualizar</button>
		
	
	</form>
   @endsection