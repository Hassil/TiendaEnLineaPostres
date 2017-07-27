<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use DB;



class categoriaController extends Controller
{
  public function ingresar(){
        
    	
    	return view('categoria');

    }


  public function guardar(Request $datos){

    	$categoria= new Categoria();
		$categoria->nombre=$datos->input('nombre');
	
		
		$categoria ->save();

        
       
        return redirect('/registrarCategoria');


    }
  }