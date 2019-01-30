
@extends('layouts.app')


@section('title','Entrenadores')

	@section('content')
	<div class="row">
	   @foreach($trainers as $trainer)
         <div class="col-sm">
         	    <div class="card" style="width: 18rem;">
         	      <!--<img class="card-img-top" src="images/{{ $trainer->avatar }}"alt=""> -->
                  <img class="card-img-top" src="../../../images/{{$trainer->avatar}}">
         		  <div class="card-body">
         			 <h5 class="card-title">{{ $trainer->name }} </h5>
         			 <p class="card-text"> Hola prueba basica</p>
         			 <a href="/trainers/{{ $trainer->slug }}" class="btn btn-primary">Ver Mas</a>   				
         		  </div>
                 </div>
         </div>
	    
       @endforeach
    </div>
   @endsection