@extends('master')
@section('contenido')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Celular</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach ($Coincidencias as $resultado): ?>
			<tr>
			<?php foreach ($resultado as $indice => $valor): ?>
			<td>{{$valor}}</td>       
		<?php endforeach ?>
		</tr>
		<br><br>
	<?php endforeach ?>
  </tbody>
</table>
@stop	