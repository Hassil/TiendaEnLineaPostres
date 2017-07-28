<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
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

    public function filtroCategoria(){
          $productos=Producto::all();
       $categorias =Categoria::all();
       return view('filtroCategoria', compact('productos','categorias'));

      
    }
  }