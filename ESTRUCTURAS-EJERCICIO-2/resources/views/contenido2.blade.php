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
	    <?php foreach ($datos as $key => $dato) {
   			echo "<tr>";
	    		$bandera=0;
	    		foreach ($dato as $key => $value) {
	    			switch ($buscador) {
	    				case 'Nombre':
	    					if($key=="Nombre"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Apellido':
	    					if($key=="Apellido"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Ciudad':
	    					if($key=="Ciudad"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Celular':
	    					if($key=="Celular"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;	    				
	    				default:
	    					echo "No existe.";
	    					break;
	    			}
	    			
	    		}
	    		
	    	

		    	echo "</tr>";
	    }
	    ?>
	  </tbody>
	</table>

@stop