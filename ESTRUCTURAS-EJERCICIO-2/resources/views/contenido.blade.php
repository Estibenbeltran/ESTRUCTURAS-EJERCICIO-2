@extends('master')

@section('contenido')
   <font color="black" face="Lithos Pro">
			<br><br>
			<div class="container">
			  	<center>
			  	<blockquote>
			    <div class="col"><h1>Ejercicio de Busqueda</h1>
			    </blockquote>
				</center>
				<center>
			    	
					  <form action="{{url('Informacion')}}" method="POST">
					  	{{csrf_field()}}
					  	
					  	<label for="buscador">Selecionar: </label><br>
					  	<label for="hola" name="hola" value="2">
					    <select class="custom-select my-1 mr-sm-2" class="border border-dark" name="buscador">
					      <option>Nombre</option>
					      <option>Apellido</option>
					      <option>Ciudad</option>
					      <option>Celular</option>
					    </select>	
					  	<br><br>
					  	<input type="text" name="datoBusqueda" class="border border-dark" class="rounded">
					  	<br><br><button type="submit" class="btn btn-primary">Buscar</button>
					  </form>
					  </center>
			</div>
			</font>

@stop
