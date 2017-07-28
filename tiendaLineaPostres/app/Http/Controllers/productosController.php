<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use Excel;
use DB;
use Storage;



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
$documento=$datos->file('archivoCSV');
$nombre=$documento->getClientOriginalName();
$r1= Storage::disk('documentos')->put($nombre,\File::get($documento));
$ruta = storage_path('documentos')."/".$nombre;
if($r1){
  Excel::selectSheetsByIndex(0)->load($ruta,function($csv){
    $csv->each(function($fila){
      $productos = new Producto();
      $productos->codigo=$fila->codigo;
      $productos->nombre=$fila->nombre;
      $productos->descripcion=$fila->descripcion;
      $productos->precio=$fila->precio;
      $productos->piezas=$fila->piezas;
      $productos->idCategoria=$fila->idcategoria;
      $productos->save();

    });
  });

}

return redirect('/consultaProductos');
    }

     public function consultaProductos(){
      $productos = Producto::all();  

       return view('consultaProductos',compact('productos'));

    }

    public function editar($id){
   $productos=Producto::find($id);
   $categorias=Categoria::all();
     return view('editarProductos', compact('productos','categorias'));

  }

    public function actualizar($id,Request $datos){
        $producto=Producto::find($id);
    $producto ->nombre=$datos->input('nombre');
    $producto ->descripcion=$datos->input('descripcion');
    $producto ->precio=$datos->input('precio');
    $producto ->codigo=$datos->input('codigo');
    $producto ->piezas=$datos->input('piezas');
    $producto ->idCategoria=$datos->input('idCategoria');
    
    $producto ->save();

        
       
        return redirect('/consultaProductos');

    }

      public function eliminar($id){
    $producto=Producto::find($id);
    $producto->delete();
 
    return redirect('consultaProductos');
   }
 
}