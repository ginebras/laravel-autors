@extends('plantillas.indexs')

@section('titulo',"Autores")

@section("contenido")



	<h3 class="title mb-3">Registrar autor</h3>

	
    <form action="{{route('post')}}" method="POST">
	  @csrf
	  <div class="form-group col-sm-3">
	    <label for="nombre">Nombre</label>
	    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Introducir nombre" required>
	  </div>
	  
	  <div class="form-group col-sm-3 mt-3">
	    <label for="apellido">Apellido</label>
	    <input type="text" class="form-control mt-3" name="apellido" placeholder="Introducir apellido" required>
	  </div>
	  
	  <div class="form-group col-sm-3 mt-3">
	    <label for="edad">Edad</label>
	    <input type="number" class="form-control mt-3" name="edad" placeholder="Introducir edad" >
	  </div>
	  
	  <div class="form-group col-sm-3 mt-3">
	    <label for="comentario">Comentario</label>
	    <textarea class="form-control mt-3" name="comentario" placeholder="Introducir comentario"></textarea>
	  </div>
	 
	 <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
	 <a href="{{route('autores')}}" class="btn btn-secondary mt-3 ">Cerrar</a>
	</form>
	      

@endsection
