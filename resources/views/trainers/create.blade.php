
@extends('layouts.app')


@section('title')

	@section('content')
	
	<form class="form-group" method="POST" action="/trainers/{{ $trainer->slug}}" enctype="multipart/form-data">
		@csrf
	
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" class="form-control">
			
		</div>

		<div class="form-group">
			<label for="">Avatar</label>
			<br>
			<input type="file" name="avatar">
			</div>
			
			
			<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
   @endsection

