<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Categoria;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function master(){
       $productos=Producto::all();
       $categorias =Categoria::all();
       return view('master', compact('productos','categorias'));


    }
}
