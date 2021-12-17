@extends('plantillas.indexs')

@section('titulo',"Autores")

@section("contenido")



	<h1 class="title">Autores</h1>

	<a href="{{route('formulario')}}" class="btn btn-primary">Registrar autor</a>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">NOMBRE</th>
	      <th scope="col">APELLIDO</th>
	      <th scope="col">EDAD</th>
	      <th scope="col">COMENTARIO</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($autores as $autor)
		  	<tr>
		      <th scope="row">{{$autor['id']}}</th>
		      <td>{{$autor['nombre']}}</td>
		      <td>{{$autor['apellido']}}</td>
		      <td>{{$autor['edad']}}</td>
		      <td>{{$autor['comentario']}}</td>
		      <td><a href="{{route('autor',[$autor->id])}}" class="btn btn-primary">EDITAR</a> </td>
		      <td><a href="{{route('delete',[$autor->id])}}" class="btn btn-danger">ELIMINAR</a></td>
		    </tr>
	  	@endforeach
	  </tbody>
	</table>


	




@endsection



