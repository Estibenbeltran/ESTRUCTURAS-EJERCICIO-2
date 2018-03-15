<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Buscador extends Controller
{
    public function buscar(request $request){
    	$opcion= $request -> input('opcion');
    	$valor = $request -> input('valor');
        $Coincidencias = 0;
        $datos=[];
        $resultado=[];
    	$datos[]=['Nombre'=>"Pepe",'Apellido'=>"Peperes",'Ciudad'=>"Bojacá",'Celular'=>"321568455"];
    	$datos[]=['Nombre'=>"Vladimir",'Apellido'=>"Martinez",'Ciudad'=>"Madrid",'Celular'=>"3123040099"];
    	$datos[]=['Nombre'=>"Enrique",'Apellido'=>"Hernandez",'Ciudad'=>"Mosquera",'Celular'=>"3133324616"];
    	$datos[]=['Nombre'=>"Dario",'Apellido'=>"Lopez",'Ciudad'=>"Cajicá",'Celular'=>"3053113575"];
    	$datos[]=['Nombre'=>"Andres",'Apellido'=>"Rosas",'Ciudad'=>"Fusagasugá",'Celular'=>"3118898284"];
    	$datos[]=['Nombre'=>"Ronaldo",'Apellido'=>"Flechas",'Ciudad'=>"Móstoles",'Celular'=>"3142030018"];
    	$datos[]=['Nombre'=>"Nicolas",'Apellido'=>"Mora",'Ciudad'=>"Veracruz",'Celular'=>"3193888541"];
    	$datos[]=['Nombre'=>"Michael",'Apellido'=>"Quintana",'Ciudad'=>"Facatativa",'Celular'=>"3113941745"];
        $resultado['Coincidencias']=[];
        foreach ($datos as $indice => $value) {
            foreach ($value as $key => $value2) {
                if($value2 == $valor){
                    $resultado['Coincidencias']=['Nombre'=>$datos[$indice]];
                    $Coincidencias++;
                }
            }
        }
        return view('resultados',$resultado);
    }
}
