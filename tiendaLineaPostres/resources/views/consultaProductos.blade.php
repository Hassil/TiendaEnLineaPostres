<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consulta Productos</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>
</head>
<body>
<h1>Consulta de postres</h1>
<table class="table table-striped">
<thead>
	<tr>
		<th>ID</th>
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Precio</th>
		<th>Piezas</th>
		<th>Categoria</th>
		
	</tr>
</thead>
<tbody>
	@foreach($productos as $p)
	<tr>
		<td>{{$p->id}}</td>
		<td>{{$p->codigo}}</td>
		<td>{{$p->nombre}}</td>
		<td>{{$p->descripcion}}</td>
		<td>{{$p->precio}}</td>
	    <td>{{$p->piezas}}</td>
	    <td>{{$p->correo}}</td>
	    <td>{{$p->idCategoria}}</td>
	  


		
 <td>
      
		<a href="{{url('/editarProductos')}}/{{$p->id}}" class="btn btn-xs btn-primary">
	 <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		</a>	
		<a href="{{url('/eliminaProductos')}}/{{$p->id}}" class="btn btn-xs btn-danger">
	 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>
			
	</tr>
    @endforeach
</tbody>
</tr> 
</td>

</table>


</tbody>
</table>
</body>
</html>

