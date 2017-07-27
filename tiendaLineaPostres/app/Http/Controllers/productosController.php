<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use Excel;
use DB;



class productosController extends Controller
{
  public function ingresar(){

    $categorias=Categoria::all();
      
      return view('productos',compact('categorias'));
    	
    

    }


  public function guardar(Request $datos){

    	$producto= new Producto();
		$producto ->nombre=$datos->input('nombre');
		$producto ->descripcion=$datos->input('descripcion');
		$producto ->precio=$datos->input('precio');
		$producto ->codigo=$datos->input('codigo');
		$producto ->piezas=$datos->input('piezas');
    $producto ->idCategoria=$datos->input('idCategoria');
		
		$producto ->save();

        
       
        return redirect('/registrarProductos');


    }
   public function ingresarCSV(){
      
      return view('productosCSv');

    }


 public function guardarProductoCsv(Request $datos){
      Excel::load($datos->archivoCSV, function($reader) {
          foreach ($reader->get() as $book) {
              Producto::firstOrCreate($book->toArray());
            }
      });
      return redirect()->back()->with('message','Se registraron correctamente los productos del archivo CSV');
    }
 
}