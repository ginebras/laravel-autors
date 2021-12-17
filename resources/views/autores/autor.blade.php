@extends('plantillas.indexs')

@section('titulo',"Autores")

@section("contenido")



	<h4 class="title">Editar autor</h4>



	@foreach($dato as $autor)
	<form action="{{route('update',[$autor->id])}}" method="POST">
	  @csrf
	  <div class="form-group col-md-4">
	    <label for="nombre">Nombre</label>
	    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" value="{{$autor->nombre}}" placeholder="Introducir nombre" required>
	  </div>
	  
	  <div class="form-group col-md-4 mt-3">
	    <label for="apellido">Apellido</label>
	    <input type="text" class="form-control" value="{{$autor->apellido}}" name="apellido" placeholder="Introducir apellido" required>
	  </div>
	  
	  <div class="form-group col-md-4 mt-3">
	    <label for="edad">Edad</label>
	    <input type="number" class="form-control" value="{{$autor->edad}}" name="edad" placeholder="Introducir edad" >
	  </div>
	  
	  <div class="form-group col-md-4 mt-3">
	    <label for="comentario">Comentario</label>
	    <textarea class="form-control" value="{{$autor->comentario}}" name="comentario" placeholder="{{$autor->comentario}}"></textarea>
	  </div>
	 
	  <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
	  <a href="{{route('autores')}}" class="btn btn-secondary mt-3">Cancelar</a>
	</form>
	@endforeach


@endsection