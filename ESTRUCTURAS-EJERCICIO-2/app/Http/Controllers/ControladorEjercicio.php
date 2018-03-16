<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjercicio extends Controller
{
    //
    public function MatrizEjercicio(Request $request){

	    	$datoBusqueda = $request->input('datoBusqueda');
	    	$buscador = $request->input('buscador');

	    	$bandera=0;
	        
	    	$datos=[];

	    	$datos[]=['Nombre'=>'Pepe','Apellido'=>'Peperes','Ciudad'=>'Bojacá','Celular'=>'321568455'];
	    	$datos[]=['Nombre'=>'Carlos','Apellido'=>'Martinez','Ciudad'=>'Madrid','Celular'=>'3123040099'];
	    	$datos[]=['Nombre'=>'Enrique','Apellido'=>'Hernandez','Ciudad'=>'Mosquera','Celular'=>'3133324616'];
	    	$datos[]=['Nombre'=>'Dario','Apellido'=>'Lopez','Ciudad'=>'Cajicá','Celular'=>'3053113575'];
	    	$datos[]=['Nombre'=>'Andres','Apellido'=>'Rosas','Ciudad'=>'Fusagasugá','Celular'=>'3118898284'];
	    	$datos[]=['Nombre'=>'Carlos','Apellido'=>'Flechas','Ciudad'=>'Mosquera','Celular'=>'3142030018'];
	    	$datos[]=['Nombre'=>'Nicolas','Apellido'=>'Mora','Ciudad'=>'Veracruz','Celular'=>'3193888541'];
	    	$datos[]=['Nombre'=>'Michael','Apellido'=>'Quintana','Ciudad'=>'Facatativa','Celular'=>'3113941745'];
	    	$datos[]=['Nombre'=>'Enrique','Apellido'=>'Disidoro','Ciudad'=>'Medellin','Celular'=>'3142030018'];
	    	$datos[]=['Nombre'=>'Nicolas','Apellido'=>'Rodriguez','Ciudad'=>'Neiva','Celular'=>'3193888541'];
	    	$datos[]=['Nombre'=>'Carlos','Apellido'=>'Martinez','Ciudad'=>'Facatativa','Celular'=>'3115598659'];

	      

	    	$info=[
	    		'datos'=>$datos,
	    		'buscador'=>$buscador,
	    		'datoBusqueda'=>$datoBusqueda
	    	];
	    	

	   	
	    return view('contenido2',$info);
	}

}
