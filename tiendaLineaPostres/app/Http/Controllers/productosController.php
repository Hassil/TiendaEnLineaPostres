<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;


use DB;



class productosController extends Controller
{
  public function ingresar(){
    	
    	return view('productos');

    }


  public function guardar(Request $datos){

    	$producto= new Producto();
		$producto ->nombre=$datos->input('nombre');
		$producto ->descripcion=$datos->input('descripcion');
		$producto ->precio=$datos->input('precio');
		$producto ->codigo=$datos->input('codigo');
		$producto ->piezas=$datos->input('piezas');
		
		$producto ->save();

        
       
        return redirect('/registrarProductos');


    }
 
}