<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Comentario;
class comentariosController extends Controller
{

	public function guardar(Request $datos){

          	$comentario= new Comentario();
		$comentario ->correo=$datos->input('correo');
		$comentario ->nombre=$datos->input('nombre');
		$comentario ->comentario=$datos->input('comentario');
		$comentario ->idProducto=$datos->input('idProducto');
		
		
		$comentario ->save();
        

        return redirect('/');
 

    	
    	

    }

}