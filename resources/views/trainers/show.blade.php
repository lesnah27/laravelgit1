@extends('layouts.app')


@section('title','Entrenador')

@section('content')

	 <img style="height: 200px; width: 200px background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/{{$trainer->avatar}}" alt="">
   
   <div class="text-center" >
       <h5 class="card-title">{{$trainer->name}}</h5>
       <h5>{{ $trainer->slug }}</h5>
      <p class="card-text"> Hola prueba basica</p>
      <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>   
   </div>
@endsection